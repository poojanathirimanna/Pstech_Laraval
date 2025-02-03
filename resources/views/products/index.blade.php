
<h1 class="text-2xl font-bold mb-6">Products</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div class="p-4 bg-gray-800 rounded-lg shadow-md">
            <div class="relative w-full h-48">
                <img 
                    src="{{ asset('storage/' . $product->image) }}" 
                    alt="{{ $product->name }}" 
                    class="w-full h-full object-contain rounded-lg"
                >
            </div>
            <div class="mt-4 text-center">
                <h3 class="text-lg font-semibold text-white">{{ $product->name }}</h3>
                <p class="text-gray-400 mt-1">{{ $product->description }}</p>
                <p class="text-yellow-500 font-bold mt-2">${{ number_format($product->price, 2) }}</p>
            </div>
        </div>
    @endforeach
</div>
