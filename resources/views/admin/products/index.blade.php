
@include('layouts.adminfrontend')
 
<div class="min-h-screen bg-gray-900 text-white p-6">
    <h1 class="text-4xl font-bold text-[#F7941D] mb-6">Admin Product Management</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('admin.products.create') }}" 
           class="bg-[#F7941D] hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            Add Product
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 transition duration-300 hover:scale-105">
                <h3 class="text-2xl font-semibold text-[#F7941D] mb-2">{{ $product->name }}</h3>
                <p class="text-gray-300 mb-2">{{ $product->description }}</p>
                <p class="text-yellow-400 font-bold mb-4">Price: ${{ $product->price }}</p>
                <div class="flex justify-between">
                    <a href="{{ route('admin.products.edit', $product->id) }}" 
                       class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                        Edit
                    </a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
        
    </div>
</div>



