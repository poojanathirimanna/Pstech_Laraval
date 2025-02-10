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
            <!-- <p><strong>Total Price:</strong> LKR {{ number_format($order->total_price, 2) }}</p> -->
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
            <p><strong>Products:</strong></p>
            <ul>
                @foreach ($order->product_ids as $productId)
                    @php
                        // Fetch the product by ID
                        $product = \App\Models\Product::find($productId);
                    @endphp
                    @if ($product)
                        <li>{{ $product->name }}</li>
                    @else
                        <li>Product not found (ID: {{ $productId }})</li>
                    @endif
                @endforeach
            </ul>
            <div class="mt-4 text-center">
            <a href="{{ url('dashboard') }}" class="btn btn-secondary">
                Back to Dashboard
            </a>
        </div>

        </div>
    </div>
</div>