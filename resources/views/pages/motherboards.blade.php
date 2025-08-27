@extends('layouts.frontend1')

@section('pages')
<!-- Professional Category Section with Elegant Dark Theme -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-teal-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-16">
        <!-- Premium Header Section -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <span class="inline-block px-6 py-3 bg-teal-600/30 backdrop-blur-sm rounded-full text-teal-200 font-semibold text-sm uppercase tracking-wider border border-teal-400/40">
                    ✦ Foundation Excellence ✦
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Premium <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 via-cyan-300 to-blue-400">Gaming</span><br>
                <span class="text-3xl md:text-4xl lg:text-5xl font-light text-gray-200">Motherboards</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                Build your ultimate gaming rig on our premium motherboards designed for maximum compatibility, reliability, and performance.
            </p>
        </div>

        @if($motherboards->isEmpty())
            <div class="text-center py-20">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-12 max-w-md mx-auto">
                    <div class="w-20 h-20 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <p class="text-xl text-slate-300 font-medium">No motherboards available</p>
                    <p class="text-slate-400 mt-2">Check back soon for new arrivals</p>
                </div>
            </div>
        @else
            <!-- Premium Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($motherboards as $motherboard)
                    <div class="group relative">
                        <!-- Premium Product Card -->
                        <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 h-full transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-teal-500/50 hover:shadow-2xl hover:shadow-teal-500/10">
                            <!-- Product Image -->
                            <div class="relative mb-6 overflow-hidden rounded-xl bg-gradient-to-br from-slate-700/50 to-slate-800/50">
                                <img src="{{ Storage::url($motherboard->image) }}" alt="{{ $motherboard->name }}" 
                                     class="w-full h-64 object-contain rounded-xl transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>

                            <!-- Product Details -->
                            <div class="space-y-4">
                                <h2 class="text-xl font-bold text-white group-hover:text-teal-300 transition-colors duration-300">
                                    {{ $motherboard->name }}
                                </h2>
                                <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">
                                    {{ $motherboard->description }}
                                </p>

                                <!-- Price -->
                                <div class="flex items-center justify-between pt-6 border-t border-slate-700/50">
                                    <div>
                                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-cyan-400">
                                            {{ number_format($motherboard->price, 0) }}
                                        </span>
                                        <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                                    </div>
                                </div>

                                <!-- Add to Cart Form -->
                                <form action="{{ route('cart.add') }}" method="POST" class="mt-6">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $motherboard->id }}">
                                    <div class="flex items-center space-x-4">
                                        <input 
                                            type="number" 
                                            name="quantity" 
                                            value="1" 
                                            min="1" 
                                            class="w-16 px-3 py-2 bg-slate-700/50 border border-slate-600/50 rounded-lg text-white text-center focus:ring-2 focus:ring-teal-500/50 focus:border-teal-500/50 focus:outline-none transition-all duration-300">
                                        <button 
                                            type="submit" 
                                            class="flex-1 px-6 py-3 bg-gradient-to-r from-teal-600 to-cyan-600 text-white font-bold rounded-xl hover:from-teal-700 hover:to-cyan-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-teal-500/50 backdrop-blur-sm">
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