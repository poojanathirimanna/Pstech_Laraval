<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_phone',
        'product_ids',
        'total_price',
        'payment_method',
    ];

    protected $casts = [
        'product_ids' => 'array', // Automatically convert JSON to array
    ];
}
