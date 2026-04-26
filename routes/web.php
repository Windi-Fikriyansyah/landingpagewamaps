<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WebhookController;

Route::get('/', function () {
    $transactions = \App\Models\Transaction::where('status', 'PAID')
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();
    return view('welcome', compact('transactions'));
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/checkout_ekspor', [CheckoutController::class, 'index_ekspor'])->name('checkout_ekspor');
Route::post('/checkout_ekspor', [CheckoutController::class, 'store_ekspor'])->name('checkout_ekspor.store');

Route::get('/pembayaran/{order_id}', [CheckoutController::class, 'pembayaran'])->name('pembayaran');
Route::get('/checkout/success/{merchant_ref}', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/status/{merchant_ref}', [CheckoutController::class, 'checkStatus']);
Route::get('/checkout/qris/download/{merchant_ref}', [CheckoutController::class, 'downloadQris'])->name('qris.download');
Route::post('/webhook/wijayapay', [WebhookController::class, 'handle']);
Route::post('/webhook/mayar', [WebhookController::class, 'handleMayar']);

Route::get('/syarat-dan-ketentuan', function () {
    return view('terms');
})->name('terms');
Route::get('/kebijakan-privasi', function () {
    return view('privacy');
})->name('privacy');
Route::get('/support', function () {
    return view('support');
})->name('support');
