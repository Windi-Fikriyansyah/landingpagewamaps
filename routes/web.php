<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WebhookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/pembayaran/{order_id}', [CheckoutController::class, 'pembayaran'])->name('pembayaran');
Route::get('/checkout/success/{merchant_ref}', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/status/{merchant_ref}', [CheckoutController::class, 'checkStatus']);
Route::post('/webhook/wijayapay', [WebhookController::class, 'handle']);
