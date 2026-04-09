<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction_histories';
    public $timestamps = false; // We use created_at and paid_at manually or handle via DB

    protected $fillable = [
        'user_id',
        'merchant_ref',
        'amount',
        'plan_sku',
        'status',
        'method',
        'payment_url',
        'customer_name',
        'customer_email',
        'paid_at'
    ];
}
