<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // IP Whitelist check 
        $allowed_ips = ['45.158.126.118'];
        if (config('app.env') === 'production' && !in_array($request->ip(), $allowed_ips)) {
            return response()->json(['status' => false, 'message' => 'Unauthorized IP'], 403);
        }

        $payload = $request->all();
        $status = strtolower($payload['status'] ?? '');
        Log::info("WijayaPay Webhook Received: ", $payload);

        $merchant_id = config('services.wijayapay.merchant_id');
        $api_key = config('services.wijayapay.api_key');
        
        // Data is inside 'data' key according to WijayaPay sample
        $data = $payload['data'] ?? [];
        $merchant_ref = $data['ref_id'] ?? '';

        // Verify Signature
        $received_signature = $request->header('X-Signature');
        $expected_signature = md5($merchant_id . $api_key . $merchant_ref);

        if ($received_signature !== $expected_signature) {
             Log::warning("WijayaPay Webhook: Signature mismatch for Order $merchant_ref. Expected: $expected_signature, Received: $received_signature");
             // return response()->json(['status' => false, 'message' => 'Invalid signature'], 403);
        }

        $transaction = Transaction::where('merchant_ref', $merchant_ref)->first();

        if ($transaction) {
            if ($status === 'paid' && $transaction->status !== 'PAID') {
                $transaction->update([
                    'status' => 'PAID',
                    'paid_at' => $data['updated_at'] ?? now()
                ]);

                // User Activation Logic
                $email = $transaction->customer_email;
                $name = $transaction->customer_name;
                $password = '12345678'; // Temporary password

                $user = User::where('email', $email)->first();
                $is_new_user = false;

                if (!$user) {
                    $user = User::create([
                        'name' => $name,
                        'email' => $email,
                        'password_hash' => Hash::make($password),
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
                    Mail::send('emails.access', [
                        'name' => $name,
                        'email' => $email,
                        'password' => $is_new_user ? $password : '****** (Gunakan password lama Anda)',
                    ], function ($message) use ($email) {
                        $message->to($email)
                                ->subject('Akses Akun Wamaps Anda');
                    });
                    Log::info("Webhook: Email sent to user $email");
                } catch (\Exception $e) {
                    Log::error("Webhook Email Error (User): " . $e->getMessage());
                }

                // Send Email Notification to Admin
                try {
                    Mail::send('emails.admin_notification', [
                        'merchant_ref' => $merchant_ref,
                        'customer_name' => $name,
                        'customer_email' => $email,
                        'amount' => $transaction->amount,
                        'method' => $transaction->method,
                        'status' => $status,
                        'paid_at' => $transaction->paid_at ? $transaction->paid_at->format('d M Y H:i:s') : now()->format('d M Y H:i:s'),
                    ], function ($message) {
                        $message->to('diwin321@gmail.com')
                                ->subject('🔥 Notifikasi Penjualan Baru - Wamaps');
                    });
                    Log::info("Webhook: Admin notification sent to diwin321@gmail.com");
                } catch (\Exception $e) {
                    Log::error("Webhook Email Error (Admin): " . $e->getMessage());
                }

                Log::info("WijayaPay Webhook: Order $merchant_ref marked as PAID and user activated.");
            } elseif ($status === 'expired') {
                $transaction->update(['status' => 'EXPIRED']);
            }
        }

        return response()->json(['status' => true]);
    }
}
