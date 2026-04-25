<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserAccessMail;
use App\Mail\AdminNotificationMail;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->all();
        Log::info("WijayaPay Webhook Received: ", $payload);

        $merchant_id = config('services.wijayapay.merchant_id');
        $api_key = config('services.wijayapay.api_key');

        $data = $payload['data'] ?? [];
        $merchant_ref = $data['ref_id'] ?? $payload['ref_id'] ?? '';
        $status = strtolower($payload['status'] ?? $data['status'] ?? '');

        $received_signature = $request->header('X-Signature') ?? $payload['signature'] ?? '';
        $expected_signature = md5($merchant_id . $api_key . $merchant_ref);

        if ($received_signature !== $expected_signature) {
            Log::warning("WijayaPay Webhook: Signature mismatch for Order $merchant_ref.");
        }

        $transaction = Transaction::where('merchant_ref', $merchant_ref)->first();

        if ($transaction && $status === 'paid' && $transaction->status !== 'PAID') {
            $transaction->update([
                'status' => 'PAID',
                'paid_at' => $data['updated_at'] ?? now()
            ]);

            $this->activateUser($transaction);
        }

        return response()->json(['status' => true]);
    }

    public function handleMayar(Request $request)
    {
        $payload = $request->all();
        Log::info("Mayar Webhook Received: ", $payload);

        $event = $payload['event'] ?? '';
        $data = $payload['data'] ?? [];

        // Support for 'testing', 'payment.received', and 'invoice.paid'
        if ($event === 'testing' || $event === 'payment.received' || $event === 'invoice.paid') {

            // Try to get merchant_ref from various possible locations
            $merchant_ref = $data['metadata']['merchant_ref'] ??
                $data['extraData']['noCustomer'] ??
                ($data['id'] ?? '');

            $transaction = Transaction::where('merchant_ref', $merchant_ref)->first();

            if (!$transaction) {
                // Mapping fields based on Mayar payload (supporting camelCase as seen in logs)
                $email = $data['customerEmail'] ?? $data['customer']['email'] ?? $data['email'] ?? '';
                $name = $data['customerName'] ?? $data['customer']['name'] ?? $data['name'] ?? 'Customer';
                $amount = $data['amount'] ?? 0;

                if (!empty($email)) {
                    // Create transaction record for history
                    $transaction = Transaction::create([
                        'merchant_ref' => $merchant_ref ?: 'MAYAR-' . time(),
                        'customer_name' => $name,
                        'customer_email' => $email,
                        'amount' => $amount,
                        'plan_sku' => 'premium',
                        'status' => 'PAID',
                        'paid_at' => now(),
                        'method' => 'MAYAR',
                    ]);
                }
            }

            if ($transaction && $transaction->status !== 'PAID') {
                $transaction->update([
                    'status' => 'PAID',
                    'paid_at' => now()
                ]);
            }

            if ($transaction) {
                $this->activateUser($transaction);
            }
        }

        return response()->json(['status' => 'ok']);
    }

    private function activateUser($transaction)
    {
        $email = $transaction->customer_email;
        $name = $transaction->customer_name;
        $password = strtolower(\Illuminate\Support\Str::random(8));

        $user = User::where('email', $email)->first();
        $is_new_user = false;

        if (!$user) {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'plan_type' => 'pro',
                'credits' => 1000,
            ]);
            $is_new_user = true;
        } else {
            $user->update([
                'plan_type' => 'pro',
                'credits' => ($user->credits ?? 0) + 1000,
            ]);
        }

        // Send Email Notification to User
        try {
            Mail::to($email)->send(new UserAccessMail([
                'name' => $name,
                'email' => $email,
                'password' => $is_new_user ? $password : '****** (Gunakan password lama Anda)',
            ]));
            Log::info("Webhook: Email queued for user $email");
        } catch (\Exception $e) {
            Log::error("Webhook Email Error (User): " . $e->getMessage());
        }

        // Send Email Notification to Admin
        try {
            Mail::to('diwin321@gmail.com')->send(new AdminNotificationMail([
                'merchant_ref' => $transaction->merchant_ref,
                'customer_name' => $name,
                'customer_email' => $email,
                'amount' => $transaction->amount,
                'method' => $transaction->method,
                'status' => 'PAID',
                'paid_at' => $transaction->paid_at ? \Carbon\Carbon::parse($transaction->paid_at)->format('d M Y H:i:s') : now()->format('d M Y H:i:s'),
            ]));
            Log::info("Webhook: Admin notification queued to diwin321@gmail.com");
        } catch (\Exception $e) {
            Log::error("Webhook Email Error (Admin): " . $e->getMessage());
        }
    }
}
