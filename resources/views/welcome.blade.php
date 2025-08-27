@extends('layouts.frontend')
@section('pages')

<!-- Professional Hero Section with Elegant Dark Theme -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-blue-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <!-- Premium Carousel with Fixed Bootstrap Integration -->
    <div id="heroCarousel" class="carousel slide h-screen" data-bs-ride="carousel" data-bs-interval="5000" data-bs-keyboard="true" data-bs-touch="true">
        <!-- Elegant Professional Indicators -->
        <div class="carousel-indicators bottom-12" style="margin-bottom: 3rem;">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" 
                    class="active" 
                    style="width: 60px; height: 4px; background: linear-gradient(90deg, #3B82F6, #6366F1); border-radius: 2px; border: none; opacity: 1;" 
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" 
                    style="width: 30px; height: 4px; background: rgba(255,255,255,0.5); border-radius: 2px; border: none; margin-left: 12px;" 
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" 
                    style="width: 30px; height: 4px; background: rgba(255,255,255,0.5); border-radius: 2px; border: none; margin-left: 12px;" 
                    aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner h-full">
            <!-- Slide 1: Gaming Excellence - Blue Theme -->
            <div class="carousel-item active h-full">
                <div class="relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-blue-900/80 to-indigo-900/70"></div>
                    <img src="{{ asset('images/GAMING.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-40" alt="Professional Gaming Setup">
                </div>
                <div class="carousel-caption absolute inset-0 flex items-center justify-center z-10">
                    <div class="max-w-6xl mx-auto px-6 text-center">
                        <div class="mb-8">
                            <span class="inline-block px-6 py-3 bg-blue-600/30 backdrop-blur-sm rounded-full text-blue-200 font-semibold text-sm uppercase tracking-wider border border-blue-400/40">
                                ✦ Premium Technology ✦
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                            Elite <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400">Gaming</span><br>
                            <span class="text-2xl md:text-4xl lg:text-5xl font-light text-gray-200">Ecosystem</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                            Professional-grade components engineered for enthusiasts who demand uncompromising performance, reliability, and cutting-edge innovation.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                            <a href="/laptops" class="group relative overflow-hidden px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-xl min-w-[180px] text-base">
                                <span class="relative z-10 flex items-center justify-center">
                                    Explore Collection
                                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Innovation Focus - Purple Theme -->
            <div class="carousel-item h-full">
                <div class="relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-purple-900/80 to-violet-900/70"></div>
                    <img src="{{ asset('images/A2.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-40" alt="Innovation in Technology">
                </div>
                <div class="carousel-caption absolute inset-0 flex items-center justify-center z-10">
                    <div class="max-w-6xl mx-auto px-6 text-center">
                        <div class="mb-8">
                            <span class="inline-block px-6 py-3 bg-purple-600/30 backdrop-blur-sm rounded-full text-purple-200 font-semibold text-sm uppercase tracking-wider border border-purple-400/40">
                                ✦ Innovation Driven ✦
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                            Future-Ready<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-300 to-violet-400">Technology</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                            Revolutionary solutions that redefine possibilities. Build immersive experiences with state-of-the-art components designed for tomorrow's challenges.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                            <a href="/laptops" class="group relative overflow-hidden px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-xl min-w-[180px] text-base">
                                <span class="relative z-10 flex items-center justify-center">
                                    Discover Innovation
                                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Customization Focus - Emerald Theme -->
            <div class="carousel-item h-full">
                <div class="relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-emerald-900/80 to-teal-900/70"></div>
                    <img src="{{ asset('images/GTX_1080TI.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-40" alt="Custom PC Building">
                </div>
                <div class="carousel-caption absolute inset-0 flex items-center justify-center z-10">
                    <div class="max-w-6xl mx-auto px-6 text-center">
                        <div class="mb-8">
                            <span class="inline-block px-6 py-3 bg-emerald-600/30 backdrop-blur-sm rounded-full text-emerald-200 font-semibold text-sm uppercase tracking-wider border border-emerald-400/40">
                                ✦ Bespoke Solutions ✦
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                            Craft Your Perfect<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-300 to-cyan-400">Dream Setup</span>
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                            Unlimited customization possibilities to create your ideal gaming rig or professional workstation. Your vision, our engineering excellence.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                            <a href="/laptops" class="group relative overflow-hidden px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white font-semibold rounded-xl hover:from-emerald-700 hover:to-teal-700 transform hover:scale-105 transition-all duration-300 shadow-xl min-w-[180px] text-base">
                                <span class="relative z-10 flex items-center justify-center">
                                    Start Building
                                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Navigation Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" 
                style="position: absolute; left: 5rem; top: 50%; transform: translateY(-50%); opacity: 0.9; background: none; border: none; z-index: 1050;">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 border border-white/30"
                 style="width: 4rem; height: 4rem; background: rgba(255,255,255,0.1); backdrop-filter: blur(12px); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.3); transition: all 0.3s ease;">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 1.75rem; height: 1.75rem; color: white;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
                style="position: absolute; right: 2rem; top: 50%; transform: translateY(-50%); opacity: 0.9; background: none; border: none; z-index: 1050;">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 border border-white/30"
                 style="width: 4rem; height: 4rem; background: rgba(255,255,255,0.1); backdrop-filter: blur(12px); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.3); transition: all 0.3s ease;">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 1.75rem; height: 1.75rem; color: white;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Professional Product Showcase with Dark Elegant Theme -->
<section class="relative py-24 bg-gradient-to-b from-slate-800 via-slate-900 to-blue-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <!-- Premium Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center mb-8">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-400 to-transparent w-32"></div>
                <span class="mx-8 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold text-sm uppercase tracking-wider rounded-full shadow-xl border border-blue-500">
                    ✦ Featured Collection ✦
                </span>
                <div class="h-px bg-gradient-to-r from-transparent via-blue-400 to-transparent w-32"></div>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                Latest <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Arrivals</span>
            </h2>
            <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Discover our curated selection of premium components, engineered for exceptional performance and cutting-edge innovation.
            </p>
        </div>

        <!-- Premium Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
            <!-- Product 1: RTX 4080 - Blue Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-blue-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-blue-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-xs font-bold rounded-full shadow-lg border border-blue-400/50 backdrop-blur-sm">
                            ✦ NEW ARRIVAL ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-100/20 to-slate-200/20 backdrop-blur-sm p-8 border border-white/10">
                        <img src="{{asset('images/rtx4080.png')}}" alt="MSI RTX 4080 SUPER" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                            Graphics Card
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-blue-400 transition-colors duration-300 leading-tight">
                            MSI RTX 4080 SUPER GAMING SLIM 16GB
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-semibold rounded-full border border-blue-400/30 backdrop-blur-sm">16GB GDDR6X</span>
                            <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-semibold rounded-full border border-emerald-400/30 backdrop-blur-sm">4K Ready</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-semibold rounded-full border border-purple-400/30 backdrop-blur-sm">Ray Tracing</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.9</span>
                                </div>
                                <span class="text-sm text-slate-400">(127 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">
                                    529,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold rounded-xl hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-blue-500/50 backdrop-blur-sm">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2: ASUS Motherboard - Purple Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-purple-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-purple-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-pink-500/10 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded-full shadow-lg border border-purple-400/50 backdrop-blur-sm">
                            ✦ BESTSELLER ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-100/20 to-slate-200/20 backdrop-blur-sm p-8 border border-white/10">
                        <img src="{{asset('images/ASUS ROG STRIX Z790.png')}}" alt="ASUS ROG MAXIMUS Z790" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Motherboard
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-purple-400 transition-colors duration-300 leading-tight">
                            ASUS ROG MAXIMUS Z790 DARK HERO
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs font-semibold rounded-full border border-purple-400/30 backdrop-blur-sm">Intel Z790</span>
                            <span class="px-3 py-1 bg-red-500/20 text-red-300 text-xs font-semibold rounded-full border border-red-400/30 backdrop-blur-sm">DDR5</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs font-semibold rounded-full border border-blue-400/30 backdrop-blur-sm">WiFi 6E</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.8</span>
                                </div>
                                <span class="text-sm text-slate-400">(89 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">
                                    300,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-purple-500/50 backdrop-blur-sm">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3: G.SKILL Memory - Emerald Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-emerald-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-emerald-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-teal-500/10 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-xs font-bold rounded-full shadow-lg border border-emerald-400">
                            ✦ SPECIAL OFFER ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 p-8">
                        <img src="{{asset('images/G.SKILL TridentZ RGB NEO 16GB.png')}}" alt="G.SKILL TridentZ RGB NEO" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                            Memory
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-emerald-600 transition-colors duration-300 leading-tight">
                            G.SKILL TridentZ RGB NEO 16GB
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-800 text-xs font-semibold rounded-full border border-emerald-200">DDR4-3600</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full border border-blue-200">RGB Lighting</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-semibold rounded-full border border-purple-200">16GB Kit</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.7</span>
                                </div>
                                <span class="text-sm text-slate-300">(203 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-600">
                                    12,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white font-bold rounded-xl hover:from-emerald-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-emerald-500">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4: Intel Core i9 - Orange Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-orange-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-orange-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-50/60 to-red-50/60 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-orange-600 to-red-600 text-white text-xs font-bold rounded-full shadow-lg border border-orange-400">
                            ✦ HIGH PERFORMANCE ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 p-8">
                        <img src="{{asset('images/Intel Core i9 14900KS .png')}}" alt="Intel Core i9-14900KS" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                            Processor
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-orange-600 transition-colors duration-300 leading-tight">
                            Intel Core i9-14900KS
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-orange-100 text-orange-800 text-xs font-semibold rounded-full border border-orange-200">24 Cores</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full border border-red-200">6.0 GHz</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full border border-blue-200">LGA 1700</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.9</span>
                                </div>
                                <span class="text-sm text-slate-300">(345 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">
                                    425,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-orange-600 to-red-600 text-white font-bold rounded-xl hover:from-orange-700 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-orange-500">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5: Samsung SSD - Cyan Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-orange-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-orange-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-50/60 to-blue-50/60 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-cyan-600 to-blue-600 text-white text-xs font-bold rounded-full shadow-lg border border-cyan-400">
                            ✦ LIGHTNING FAST ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 p-8">
                        <img src="{{asset('images/CORSAIR VENGEANCE 16GB DDR5.png')}}" alt="CORSAIR VENGEANCE DDR5" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                            Memory
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-cyan-600 transition-colors duration-300 leading-tight">
                            Corsair Vengeance 16GB DDR5
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-cyan-100 text-cyan-800 text-xs font-semibold rounded-full border border-cyan-200">DDR5</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full border border-green-200">5600MHz</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-semibold rounded-full border border-purple-200">16GB</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.8</span>
                                </div>
                                <span class="text-sm text-slate-300">(156 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-600">
                                    45,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-cyan-600 to-blue-600 text-white font-bold rounded-xl hover:from-cyan-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-cyan-500">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 6: Corsair PSU - Yellow Theme -->
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl hover:shadow-orange-500/20 transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-white/20 hover:border-orange-400/50">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-50/60 to-amber-50/60 opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                
                <div class="relative p-10">
                    <!-- Product Badge -->
                    <div class="absolute top-6 right-6 z-10">
                        <span class="px-4 py-2 bg-gradient-to-r from-yellow-600 to-amber-600 text-white text-xs font-bold rounded-full shadow-lg border border-yellow-400">
                            ✦ 80+ GOLD ✦
                        </span>
                    </div>

                    <!-- Product Image -->
                    <div class="relative mb-8 overflow-hidden rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 p-8">
                        <img src="{{asset('images/ASUS PRIME A520M-A II.png')}}" alt="ASUS Motherboard" 
                             class="w-full h-56 object-contain group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-5">
                        <!-- Product Category -->
                        <div class="flex items-center text-sm text-slate-300 uppercase tracking-wider font-semibold">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            Motherboard
                        </div>

                        <!-- Product Title -->
                        <h3 class="text-2xl font-bold text-white group-hover:text-yellow-600 transition-colors duration-300 leading-tight">
                            ASUS PRIME A520M-A II
                        </h3>

                        <!-- Features -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-semibold rounded-full border border-yellow-200">AMD A520</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full border border-green-200">DDR4</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full border border-blue-200">Micro ATX</span>
                        </div>

                        <!-- Rating and Price -->
                        <div class="flex items-center justify-between pt-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-sm text-slate-200 ml-1 font-semibold">4.9</span>
                                </div>
                                <span class="text-sm text-slate-300">(278 reviews)</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-6 border-t border-white/10">
                            <div>
                                <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-amber-600">
                                    35,000
                                </span>
                                <span class="text-lg text-slate-300 ml-1 font-semibold">LKR</span>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-yellow-600 to-amber-600 text-white font-bold rounded-xl hover:from-yellow-700 hover:to-amber-700 transition-all duration-300 transform hover:scale-105 shadow-lg border border-yellow-500">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        
</section>

@endsection
