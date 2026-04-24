<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;




class CheckoutController extends Controller
{
    public function index()
    {
        return redirect("https://wamaps.myr.id/pl/checkout-wamaps");
    }

    public function index_ekspor()
    {
        return redirect("https://wamaps.myr.id/pl/checkout-wamaps");
    }

    public function store(Request $request)
    {
        return redirect("https://wamaps.myr.id/pl/checkout-wamaps");
    }

    public function store_ekspor(Request $request)
    {
        return redirect("https://wamaps.myr.id/pl/checkout-wamaps");
    }

    public function pembayaran($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->firstOrFail();

        if ($transaction->plan_sku === 'premium_ekspor') {
            return view('pembayaran_ekspor', compact('transaction'));
        }

        return view('pembayaran', compact('transaction'));
    }

    public function success($merchant_ref)
    {
        $transaction = Transaction::where('merchant_ref', $merchant_ref)->firstOrFail();

        if ($transaction->plan_sku === 'premium_ekspor') {
            return view('success_ekspor', compact('transaction'));
        }

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
