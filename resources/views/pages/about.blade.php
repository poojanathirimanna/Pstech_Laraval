@extends('layouts.frontend')
@section('pages')

<!-- About Us Hero Section -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-blue-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #1e40af 0%, transparent 50%), radial-gradient(circle at 75% 75%, #7c3aed 0%, transparent 50%);"></div>
    </div>
    
    <!-- Main Content -->
    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Header -->
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    About
                    <span class="bg-gradient-to-r from-blue-400 via-purple-500 to-cyan-400 bg-clip-text text-transparent">
                        PStech
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Your premier destination for cutting-edge gaming technology and high-performance computing solutions.
                </p>
            </div>

            <!-- Story Section -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                        Our Story
                    </h2>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Founded with a passion for gaming and technology, PStech has been at the forefront of delivering premium gaming hardware to enthusiasts across the globe. We understand that every frame, every millisecond, and every component matters when it comes to achieving peak performance.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        From powerful gaming laptops to high-end graphics cards, cutting-edge processors to lightning-fast RAM modules, we curate only the finest components that meet the demands of serious gamers and professionals alike.
                    </p>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-2xl p-8 backdrop-blur-sm border border-white/10">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-blue-400 mb-2">5+</div>
                                <div class="text-gray-300">Years Experience</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-purple-400 mb-2">10K+</div>
                                <div class="text-gray-300">Happy Gamers</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-cyan-400 mb-2">500+</div>
                                <div class="text-gray-300">Products</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-pink-400 mb-2">24/7</div>
                                <div class="text-gray-300">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="grid md:grid-cols-2 gap-8 mb-20">
                <div class="bg-gradient-to-br from-blue-600/10 to-blue-800/10 rounded-2xl p-8 backdrop-blur-sm border border-blue-500/20">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Our Mission</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        To empower gamers and tech enthusiasts with the highest quality hardware and exceptional service, enabling them to push the boundaries of what's possible in gaming and computing.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-600/10 to-purple-800/10 rounded-2xl p-8 backdrop-blur-sm border border-purple-500/20">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Our Vision</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        To become the global leader in gaming technology retail, recognized for our innovation, quality, and commitment to the gaming community's evolving needs.
                    </p>
                </div>
            </div>

            <!-- What We Offer -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    What We Offer
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Discover our comprehensive range of premium gaming hardware
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-20">
                <!-- Gaming Laptops -->
                <div class="group bg-gradient-to-br from-gray-800/50 to-gray-900/50 rounded-2xl p-6 backdrop-blur-sm border border-white/10 hover:border-blue-500/30 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Gaming Laptops</h3>
                    <p class="text-gray-300">High-performance gaming laptops designed for ultimate portability and power.</p>
                </div>

                <!-- Graphics Cards -->
                <div class="group bg-gradient-to-br from-gray-800/50 to-gray-900/50 rounded-2xl p-6 backdrop-blur-sm border border-white/10 hover:border-purple-500/30 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Graphics Cards</h3>
                    <p class="text-gray-300">Cutting-edge GPUs for stunning visuals and exceptional gaming performance.</p>
                </div>

                <!-- Gaming Components -->
                <div class="group bg-gradient-to-br from-gray-800/50 to-gray-900/50 rounded-2xl p-6 backdrop-blur-sm border border-white/10 hover:border-cyan-500/30 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Gaming Components</h3>
                    <p class="text-gray-300">Premium CPUs, RAM, motherboards, and components for custom builds.</p>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="text-center bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-2xl p-12 backdrop-blur-sm border border-white/10">
                <h2 class="text-3xl font-bold text-white mb-4">
                    Ready to Level Up Your Gaming?
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Join thousands of satisfied gamers who trust PStech for their high-performance gaming needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('pages.laptops') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Shop Now
                    </a>
                
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
