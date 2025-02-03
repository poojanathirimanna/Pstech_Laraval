<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who placed the order
        $table->decimal('total_price', 10, 2); // Total price of the order
        $table->text('cart_details'); // Store cart details as JSON
        $table->string('status')->default('Pending'); // Order status (e.g., Pending, Completed)
        $table->timestamps(); // Created at and updated at timestamps
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
