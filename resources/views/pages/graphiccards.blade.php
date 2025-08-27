@extends('layouts.frontend1')

@section('pages')
<!-- Professional Category Section with Elegant Dark Theme -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-purple-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-16">
        <!-- Premium Header Section -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <span class="inline-block px-6 py-3 bg-purple-600/30 backdrop-blur-sm rounded-full text-purple-200 font-semibold text-sm uppercase tracking-wider border border-purple-400/40">
                    ✦ Visual Excellence ✦
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                High-Performance <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-300 to-violet-400">Graphics</span><br>
                <span class="text-3xl md:text-4xl lg:text-5xl font-light text-gray-200">Cards</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                Unleash unparalleled visual performance with our cutting-edge graphics cards designed for gaming supremacy and creative excellence.
            </p>
        </div>

        @if($graphicCards->isEmpty())
            <div class="text-center py-20">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-12 max-w-md mx-auto">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <p class="text-xl text-slate-300 font-medium">No graphics cards available</p>
                    <p class="text-slate-400 mt-2">Check back soon for new arrivals</p>
                </div>
            </div>
        @else
            <!-- Premium Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($graphicCards as $graphicCard)
                    <div class="group relative">
                        <!-- Premium Product Card -->
                        <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 h-full transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-purple-500/50 hover:shadow-2xl hover:shadow-purple-500/10">
                            <!-- Product Image -->
                            <div class="relative mb-6 overflow-hidden rounded-xl bg-gradient-to-br from-slate-700/50 to-slate-800/50">
                                <img src="{{ Storage::url($graphicCard->image) }}" alt="{{ $graphicCard->name }}" 
                                     class="w-full h-64 object-contain rounded-xl transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>

                            <!-- Product Details -->
                            <div class="space-y-4">
                                <h2 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors duration-300">
                                    {{ $graphicCard->name }}
                                </h2>
                                <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">
                                    {{ $graphicCard->description }}
                                </p>

                                <!-- Price -->
                                <div class="flex items-center justify-between pt-6 border-t border-slate-700/50">
                                    <div>
                                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">
                                            {{ number_format($graphicCard->price, 0) }}
                                        </span>
                                        <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                                    </div>
                                </div>

                                <!-- Add to Cart Form -->
                                <form action="{{ route('cart.add') }}" method="POST" class="mt-6">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $graphicCard->id }}">
                                    <div class="flex items-center space-x-4">
                                        <input 
                                            type="number" 
                                            name="quantity" 
                                            value="1" 
                                            min="1" 
                                            class="w-16 px-3 py-2 bg-slate-700/50 border border-slate-600/50 rounded-lg text-white text-center focus:ring-2 focus:ring-purple-500/50 focus:border-purple-500/50 focus:outline-none transition-all duration-300">
                                        <button 
                                            type="submit" 
                                            class="flex-1 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-purple-500/50 backdrop-blur-sm">
                                            Add to Cart
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
