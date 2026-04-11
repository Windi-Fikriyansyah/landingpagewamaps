<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;


class CheckoutController extends Controller
{
    public function index()
    {
        $merchant_id = config('services.wijayapay.merchant_id');
        $api_key = config('services.wijayapay.api_key');

        $response = Http::get("https://wijayapay.com/api/get-payment", [
            'code_merchant' => $merchant_id,
            'api_key' => $api_key,
        ]);

        $channels = [];
        if ($response->successful() && isset($response->json()['data'])) {
            $channels = collect($response->json()['data'])
                ->where('status', 'active')
                ->sortByDesc(fn($channel) => $channel['code'] === 'QRIS')
                ->values()
                ->all();
        }

        return view('checkout', compact('channels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'payment_method' => 'required|string',
        ]);

        $merchant_id = config('services.wijayapay.merchant_id');
        $api_key = config('services.wijayapay.api_key');

        // Fetch live fees again to prevent user tampering with frontend values
        $response = Http::get("https://wijayapay.com/api/get-payment", [
            'code_merchant' => $merchant_id,
            'api_key' => $api_key,
        ]);

        $subtotal = 500;
        $admin_fee = 0;

        if ($response->successful() && isset($response->json()['data'])) {
            $channel = collect($response->json()['data'])->where('code', $request->payment_method)->first();
            if ($channel) {
                $fee_fixed = (float) $channel['fee_amount'];
                $fee_percent = (float) $channel['fee_percent'];
                $admin_fee = $fee_fixed + ($subtotal * ($fee_percent / 100));
            }
        }

        $merchant_ref = 'WAM-' . strtoupper(Str::random(10));
        $total_amount = round($subtotal + $admin_fee);

        // Signature: md5(code_merchant + api_key + ref_id)
        $signature = md5($merchant_id . $api_key . $merchant_ref);

        $response = Http::withHeaders([
            'X-Signature' => $signature,
        ])->post('https://wijayapay.com/api/transaction/create', [
                    'code_merchant' => $merchant_id,
                    'api_key' => $api_key,
                    'ref_id' => $merchant_ref,
                    'code_payment' => $request->payment_method,
                    'nominal' => $total_amount,
                    'callback_url' => rtrim(config('app.url'), '/') . '/webhook/wijayapay',
                ]);

        $result = $response->json();
        Log::info("WijayaPay Create Transaction Response: ", ['result' => $result]);

        if ($response->successful() && isset($result['success']) && $result['success']) {
            $data = $result['data'];

            $transaction = Transaction::create([
                'merchant_ref' => $merchant_ref,
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'amount' => $total_amount,
                'plan_sku' => 'premium',
                'status' => 'UNPAID',
                'payment_url' => $data['qr_image'] ?? $data['checkout_url'] ?? null,
                'method' => $request->payment_method,
            ]);

            // Send Invoice Email to Customer
            try {
                Mail::to($transaction->customer_email)->send(new InvoiceMail($transaction));
            } catch (\Exception $e) {
                Log::error("Failed to send invoice email: " . $e->getMessage());
            }

            return redirect()->route('pembayaran', $merchant_ref);
        }

        return back()->with('error', 'Gagal membuat transaksi: ' . ($result['message'] ?? 'Respons tidak valid dari WijayaPay.'));
    }

    public function pembayaran($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->firstOrFail();
        return view('pembayaran', compact('transaction'));
    }

    public function success($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->firstOrFail();
        return view('success', compact('transaction'));
    }

    public function checkStatus($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->first();
        return response()->json([
            'status' => $transaction ? $transaction->status : 'NOT_FOUND'
        ]);
    }

    public function downloadQris($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->firstOrFail();

        if (!$transaction->payment_url || $transaction->method !== 'QRIS') {
            return back()->with('error', 'URL QRIS tidak ditemukan.');
        }

        try {
            $response = \Illuminate\Support\Facades\Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            ])->get($transaction->payment_url);

            if ($response->successful()) {
                $imageContent = $response->body();
                $contentType = $response->header('Content-Type') ?? 'image/png';

                return response($imageContent)
                    ->header('Content-Type', $contentType)
                    ->header('Content-Disposition', 'attachment; filename="QRIS-Wamaps-' . $merchant_ref . '.png"');
            }

            return redirect($transaction->payment_url);
        } catch (\Exception $e) {
            Log::error("QRIS Download Error: " . $e->getMessage());
            return redirect($transaction->payment_url);
        }
    }
}
