@include('layouts.adminfrontend')


<div class="container my-5">
    <h1 class="text-center mb-4 text-success">Order Confirmation</h1>
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>Order Details</h4>
        </div>
        <div class="card-body">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
            <p><strong>Email:</strong> {{ $order->customer_email }}</p>
            <p><strong>Address:</strong> {{ $order->customer_address }}</p>
            <p><strong>Phone:</strong> {{ $order->customer_phone }}</p>
            <p><strong>Total Price:</strong> LKR {{ number_format($order->total_price, 2) }}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
            <p><strong>Products:</strong></p>
            <ul>
                @foreach ($order->product_ids as $productId)
                    <li>Product ID: {{ $productId }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

