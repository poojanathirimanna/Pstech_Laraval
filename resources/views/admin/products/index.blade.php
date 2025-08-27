
@extends('layouts.frontend1')

@section('pages')
<!-- Premium Admin Product Management Page -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-emerald-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-16">
        <!-- Premium Header Section -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <span class="inline-block px-6 py-3 bg-emerald-600/30 backdrop-blur-sm rounded-full text-emerald-200 font-semibold text-sm uppercase tracking-wider border border-emerald-400/40">
                    ✦ Product Management ✦
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Product <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-green-300 to-teal-400">Management</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                Manage your product inventory with powerful tools and intuitive controls.
            </p>
            
            <!-- Add Product Button -->
            <div class="flex justify-center">
                <a href="{{ route('admin.products.create') }}" 
                   class="group relative bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-500 hover:to-green-500 text-white font-bold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-emerald-500/25">
                    <span class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add New Product
                    </span>
                </a>
            </div>
        </div>

        <!-- Products Grid -->
        @if($products->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="group relative">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-emerald-500/50 hover:shadow-2xl hover:shadow-emerald-500/10">
                    <!-- Product Image -->
                    @if($product->image)
                    <div class="mb-6 overflow-hidden rounded-xl">
                        <img src="{{ asset('images/' . $product->image) }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-48 object-cover transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                    @else
                    <div class="mb-6 bg-gradient-to-br from-emerald-500/20 to-green-500/20 rounded-xl h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-emerald-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    @endif

                    <!-- Product Info -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-white group-hover:text-emerald-300 transition-colors duration-300">
                            {{ $product->name }}
                        </h3>
                        
                        <p class="text-gray-300 leading-relaxed line-clamp-3">
                            {{ $product->description ?: 'No description available' }}
                        </p>

                        <!-- Category Badge -->
                        @if($product->category)
                        <span class="inline-block px-3 py-1 bg-emerald-600/30 text-emerald-300 text-sm font-medium rounded-full border border-emerald-500/30">
                            {{ $product->category->name }}
                        </span>
                        @endif

                        <!-- Price and Stock -->
                        <div class="flex justify-between items-center pt-4 border-t border-slate-600/30">
                            <div>
                                <p class="text-emerald-400 text-2xl font-bold">
                                    {{ number_format($product->price, 0) }} LKR
                                </p>
                                <p class="text-slate-400 text-sm">Price</p>
                            </div>
                            <div class="text-right">
                                <p class="text-white text-xl font-semibold">
                                    {{ $product->stock ?? 'N/A' }}
                                </p>
                                <p class="text-slate-400 text-sm">In Stock</p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3 pt-4">
                            <a href="{{ route('admin.products.edit', $product->id) }}" 
                               class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-300 text-center transform hover:scale-105">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this product?')"
                                        class="w-full bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-500 hover:to-pink-500 text-white font-semibold py-3 px-4 rounded-xl transition-all duration-300 transform hover:scale-105">
                                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-12 max-w-md mx-auto">
                <svg class="w-24 h-24 text-slate-400 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <h3 class="text-2xl font-bold text-white mb-4">No Products Found</h3>
                <p class="text-gray-300 mb-6">Start by adding your first product to the inventory.</p>
                <a href="{{ route('admin.products.create') }}" 
                   class="inline-flex items-center bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-500 hover:to-green-500 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add First Product
                </a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection



