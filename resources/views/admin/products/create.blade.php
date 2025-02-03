@include(  'layouts.adminfrontend' )

<div class="flex justify-center items-center min-h-screen bg-gray-900">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 text-white p-6 rounded-lg shadow-lg max-w-xl w-full space-y-4">
        @csrf
        <h2 class="text-2xl font-bold text-[#F7941D] mb-4">Add New Product</h2>

        <!-- Product Name -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">Product Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                required 
                class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-semibold text-gray-300 mb-2">Description:</label>
            <textarea 
                id="description" 
                name="description" 
                rows="4" 
                class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none"></textarea>
        </div>

        <!-- Price & Stock -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Price & Stock -->
<div class="grid grid-cols-2 gap-4">
    <div>
        <label for="price" class="block text-sm font-semibold text-gray-300 mb-2">Price:</label>
        <input 
            type="number" 
            id="price" 
            name="price" 
            " 
            min="0" 
            required 
            class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
    </div>

    <div>
        <label for="stock" class="block text-sm font-semibold text-gray-300 mb-2">Stock:</label>
        <input 
            type="number" 
            id="stock" 
            name="stock" 
            min="0" 
            required 
            class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
    </div>
</div>

        </div>

        <!-- Category -->
        <div>
            <label for="category_id" class="block text-sm font-semibold text-gray-300 mb-2">Category:</label>
            <select 
                id="category_id" 
                name="category_id" 
                required 
                class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Image -->
        <div>
            <label for="image" class="block text-sm font-semibold text-gray-300 mb-2">Image:</label>
            <input 
                type="file" 
                id="image" 
                name="image" 
                class="w-full bg-gray-700 border border-gray-600 rounded-lg p-2 text-gray-200 focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="w-full bg-[#F7941D] text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-400">
                Add Product
            </button>
        </div>
    </form>
</div>
