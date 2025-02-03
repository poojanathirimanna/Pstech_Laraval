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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Optional if users can order without logging in
            $table->string('customer_name');
            $table->string('customer_email');
            $table->text('customer_address');
            $table->string('customer_phone');
            $table->json('product_ids'); // Store product IDs as a JSON array
            $table->decimal('total_price', 10, 2);
            $table->string('payment_method'); // E.g., Cash on Delivery or Store Pickup
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
