@extends('layouts.adminfrontend')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 text-primary">Order Details</h1>
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Order #{{ $order->id }}</h4>
        </div>
        <div class="card-body p-4">
            <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
            <p><strong>Email:</strong> {{ $order->customer_email }}</p>
            <p><strong>Address:</strong> {{ $order->customer_address }}</p>
            <p><strong>Phone:</strong> {{ $order->customer_phone }}</p>
            <p><strong>Total Price:</strong> LKR {{ number_format($order->total_price, 2) }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('Y-m-d') }}</p>
            <p><strong>Products:</strong></p>
            <ul>
                @foreach(json_decode($order->product_ids) as $productId)
                    <li>Product ID: {{ $productId }}</li>
                @endforeach
            </ul>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>
        </div>
    </div>
</div>
@endsection
