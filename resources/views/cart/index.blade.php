@include('layouts.adminfrontend')

<div class="container mx-auto p-6 bg-gray-900 text-white">
    <h1 class="text-3xl font-bold mb-4">My Cart</h1>

    @if($cartItems->isEmpty())
        <p class="text-center text-gray-400">Your cart is empty.</p>
        <a 
            href="{{ route('dashboard') }}" 
            class="bg-white text-[#F7941D] font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out"
        >
            Go To Dashboard
        </a>
    @else
        <table class="table-auto w-full bg-gray-800 text-white rounded-lg">
            <thead>
                <tr>
                    <th class="p-4">Product</th>
                    <th class="p-4">Quantity</th>
                    <th class="p-4">Price (per unit)</th>
                    <th class="p-4">Total Price</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp <!-- Initialize grand total -->
                @foreach($cartItems as $item)
                    @php
                        $itemTotal = $item->product->price * $item->quantity;
                        $grandTotal += $itemTotal;
                    @endphp
                    <tr>
                        <td class="p-4">{{ $item->product->name }}</td>
                        <td class="p-4">
                            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-16 bg-gray-700 text-white p-2 rounded">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
                            </form>
                        </td>
                        <td class="p-4">{{ number_format($item->product->price, 2) }} LKR</td>
                        <td class="p-4">{{ number_format($itemTotal, 2) }} LKR</td>
                        <td class="p-4">
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Display the Grand Total -->
        <div class="mt-6 text-right text-lg font-bold">
            <p> Total: price{{ number_format($grandTotal, 2) }} LKR</p>
        </div>

        <div class="mt-6 text-right">
            <a 
                href="{{ route('checkout.index') }}" 
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out"
            >
                CHECKOUT
            </a>
        </div>
    @endif
</div>
