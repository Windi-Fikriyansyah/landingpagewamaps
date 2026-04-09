<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('transaction_histories')) {
            Schema::create('transaction_histories', function (Blueprint $table) {
                $table->id();
                $table->string('merchant_ref')->unique();
                $table->string('customer_name');
                $table->string('customer_email');
                $table->string('whatsapp')->nullable();
                $table->integer('amount');
                $table->string('plan_sku');
                $table->string('status')->default('UNPAID');
                $table->string('payment_url')->nullable();
                $table->string('method')->nullable();
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('paid_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
