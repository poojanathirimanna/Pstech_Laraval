@extends('layouts.frontend1')

@section('pages')
<!-- Premium Edit Product Page -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-blue-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-16">
        <!-- Premium Header Section -->
        <div class="text-center mb-12">
            <div class="mb-8">
                <span class="inline-block px-6 py-3 bg-blue-600/30 backdrop-blur-sm rounded-full text-blue-200 font-semibold text-sm uppercase tracking-wider border border-blue-400/40">
                    ✦ Edit Product ✦
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Update <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Product</span>
            </h1>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Modify product details and keep your inventory up to date.
            </p>
        </div>

        <!-- Form Container -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 md:p-12">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')
                    
                    <!-- Current Product Info Display -->
                    <div class="bg-slate-700/30 rounded-xl p-6 border border-slate-600/30">
                        <h3 class="text-xl font-semibold text-white mb-4 flex items-center">
                            <svg class="w-6 h-6 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Current Product: {{ $product->name }}
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <span class="text-slate-400">Current Price:</span>
                                <span class="text-blue-400 font-semibold ml-2">{{ number_format($product->price, 0) }} LKR</span>
                            </div>
                            <div>
                                <span class="text-slate-400">Current Stock:</span>
                                <span class="text-blue-400 font-semibold ml-2">{{ $product->stock }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400">Category:</span>
                                <span class="text-blue-400 font-semibold ml-2">{{ $product->category->name ?? 'No category' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product Name -->
                    <div class="group">
                        <label for="name" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            Product Name *
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ $product->name }}"
                            required 
                            class="w-full bg-slate-700/50 border border-slate-600/50 rounded-xl p-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-slate-700/70 transition-all duration-300">
                    </div>

                    <!-- Description -->
                    <div class="group">
                        <label for="description" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                            </svg>
                            Description
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="4" 
                            class="w-full bg-slate-700/50 border border-slate-600/50 rounded-xl p-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-slate-700/70 transition-all duration-300 resize-none">{{ $product->description }}</textarea>
                    </div>

                    <!-- Price & Stock Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Price -->
                        <div class="group">
                            <label for="price" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                                Price (LKR) *
                            </label>
                            <input 
                                type="number" 
                                id="price" 
                                name="price" 
                                value="{{ $product->price }}"
                                min="0" 
                                step="0.01"
                                required 
                                class="w-full bg-slate-700/50 border border-slate-600/50 rounded-xl p-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-slate-700/70 transition-all duration-300">
                        </div>

                        <!-- Stock -->
                        <div class="group">
                            <label for="stock" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                Stock Quantity *
                            </label>
                            <input 
                                type="number" 
                                id="stock" 
                                name="stock" 
                                value="{{ $product->stock }}"
                                min="0" 
                                required 
                                class="w-full bg-slate-700/50 border border-slate-600/50 rounded-xl p-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-slate-700/70 transition-all duration-300">
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="group">
                        <label for="category_id" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Category *
                        </label>
                        <select 
                            id="category_id" 
                            name="category_id" 
                            required 
                            class="w-full bg-slate-700/50 border border-slate-600/50 rounded-xl p-4 text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:bg-slate-700/70 transition-all duration-300">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" 
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}
                                        class="bg-slate-700 text-white">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Current Image Display -->
                    @if($product->image)
                    <div class="group">
                        <label class="block text-lg font-semibold text-white mb-3">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Current Image
                        </label>
                        <div class="bg-slate-700/30 rounded-xl p-4 border border-slate-600/30">
                            <img src="{{ asset('images/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-32 h-32 object-cover rounded-lg">
                        </div>
                    </div>
                    @endif

                    <!-- New Image Upload -->
                    <div class="group">
                        <label for="image" class="block text-lg font-semibold text-white mb-3 group-focus-within:text-blue-400 transition-colors duration-300">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Upload New Image (Optional)
                        </label>
                        <div class="relative">
                            <input 
                                type="file" 
                                id="image" 
                                name="image" 
                                accept="image/*"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            <div class="bg-slate-700/50 border-2 border-dashed border-slate-600/50 rounded-xl p-8 text-center hover:border-blue-500/50 hover:bg-slate-700/70 transition-all duration-300">
                                <svg class="w-12 h-12 text-slate-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="text-white font-semibold mb-2">Click to upload new image</p>
                                <p class="text-slate-400 text-sm">PNG, JPG, GIF up to 10MB (will replace current image)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-8">
                        <button 
                            type="submit" 
                            class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/25">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            Update Product
                        </button>
                        <a href="{{ route('admin.products.index') }}" 
                           class="flex-1 bg-slate-600/50 hover:bg-slate-600/70 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 text-center border border-slate-500/50 hover:border-slate-400/50">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
