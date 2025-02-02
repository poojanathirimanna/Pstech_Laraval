@extends(  'layouts.adminfrontend' )

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Edit Product</h1>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <label class="block mb-2 text-sm font-medium text-gray-700">Product Name</label>
            <input type="text" name="name" value="{{ $product->name }}" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">

            <!-- Description -->
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">{{ $product->description }}</textarea>

            <!-- Price -->
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Price (LKR)</label>
            <input type="number" name="price" value="{{ $product->price }}" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">

            <!-- Stock -->
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Stock Quantity</label>
            <input type="number" name="stock" value="{{ $product->stock }}" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">

            <!-- Category -->
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <!-- Product Image -->
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Upload New Image</label>
            <input type="file" name="image" 
                class="w-full text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:ring-2 focus:ring-orange-500 focus:border-orange-500">

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full mt-6 bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                Update Product
            </button>
        </form>
    </div>
</div>
