@include('layouts.adminfrontend')

<div class="container mx-auto p-6 bg-gray-900 text-white">
    <h1 class="text-3xl font-bold mb-4">My Cart</h1>

    @if($cartItems->isEmpty())
        <p class="text-center text-gray-400">Your cart is empty.</p>
    @else
        <table class="table-auto w-full bg-gray-800 text-white rounded-lg">
            <thead>
                <tr>
                    <th class="p-4">Product</th>
                    <th class="p-4">Quantity</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td class="p-4">{{ $item->product->name }}</td>
                        <td class="p-4">
                            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-16 bg-gray-700 text-white p-2 rounded">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
                            </form>
                        </td>
                        <td class="p-4">{{ $item->product->price * $item->quantity }} LKR</td>
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
        <div class="mt-6 text-right">
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg">Checkout</button>
            </form>
        </div>
    @endif
</div>


