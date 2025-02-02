<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->decimal('total_price', 10, 2); // Total price of the order
            $table->text('address'); // Delivery address
            $table->string('payment_method'); // Payment method (e.g., cash, card)
            $table->timestamp('order_date'); // Order date and time
            $table->timestamps(); // Created_at and updated_at timestamps

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
