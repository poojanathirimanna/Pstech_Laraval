@extends('layouts.frontend1')

@section('pages')
<!-- Professional Admin Dashboard with Elegant Dark Theme -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-gray-900 via-slate-800 to-indigo-900">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 py-16">
        <!-- Premium Header Section -->
        <div class="text-center mb-16">
            <div class="mb-8">
                <span class="inline-block px-6 py-3 bg-indigo-600/30 backdrop-blur-sm rounded-full text-indigo-200 font-semibold text-sm uppercase tracking-wider border border-indigo-400/40">
                    ✦ Administrator Panel ✦
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Admin <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-300 to-blue-400">Dashboard</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-4xl mx-auto leading-relaxed">
                Welcome back, {{ Auth::user()->name }}! Manage your store with powerful tools and real-time insights.
            </p>
        </div>

        <!-- Stats Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <!-- Total Users Card -->
            <div class="group relative">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">
                            {{ $stats['total_users'] }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Total Users</h3>
                    <p class="text-slate-400 text-sm">Registered customers</p>
                </div>
            </div>

            <!-- Total Products Card -->
            <div class="group relative">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-emerald-500/50 hover:shadow-2xl hover:shadow-emerald-500/10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500/20 to-green-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-green-400">
                            {{ $stats['total_products'] }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Total Products</h3>
                    <p class="text-slate-400 text-sm">Available inventory</p>
                </div>
            </div>

            <!-- Total Categories Card -->
            <div class="group relative">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-purple-500/50 hover:shadow-2xl hover:shadow-purple-500/10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">
                            {{ $stats['total_categories'] }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Categories</h3>
                    <p class="text-slate-400 text-sm">Product categories</p>
                </div>
            </div>

            <!-- Total Orders Card -->
            <div class="group relative">
                <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-400">
                            {{ $stats['total_orders'] }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Total Orders</h3>
                    <p class="text-slate-400 text-sm">Customer orders</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-white mb-8 text-center">Quick Actions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Manage Categories -->
                <a href="{{ route('admin.categories.index') }}" class="group">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-purple-500/50 hover:shadow-2xl hover:shadow-purple-500/10">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors duration-300">Manage Categories</h3>
                            <p class="text-slate-400 mt-2">Add, edit, or remove product categories</p>
                        </div>
                    </div>
                </a>

                <!-- Manage Products -->
                <a href="{{ route('admin.products.index') }}" class="group">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-emerald-500/50 hover:shadow-2xl hover:shadow-emerald-500/10">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500/20 to-green-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-emerald-300 transition-colors duration-300">Manage Products</h3>
                            <p class="text-slate-400 mt-2">Add, edit, or remove products</p>
                        </div>
                    </div>
                </a>

                <!-- View Orders -->
                <a href="{{ route('admin.orders.index') }}" class="group">
                    <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8 transform transition-all duration-500 hover:scale-[1.02] hover:bg-slate-800/60 hover:border-orange-500/50 hover:shadow-2xl hover:shadow-orange-500/10">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-orange-300 transition-colors duration-300">View Orders</h3>
                            <p class="text-slate-400 mt-2">Monitor and manage customer orders</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity Section -->
        @if($stats['recent_products']->isNotEmpty() || $stats['recent_orders']->isNotEmpty())
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Products -->
            @if($stats['recent_products']->isNotEmpty())
            <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-6 h-6 text-emerald-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Recent Products
                </h3>
                <div class="space-y-4">
                    @foreach($stats['recent_products'] as $product)
                    <div class="flex items-center justify-between p-4 bg-slate-700/30 rounded-xl border border-slate-600/30">
                        <div>
                            <h4 class="text-white font-semibold">{{ $product->name }}</h4>
                            <p class="text-slate-400 text-sm">{{ $product->category->name ?? 'No category' }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-emerald-400 font-bold">{{ number_format($product->price, 0) }} LKR</p>
                            <p class="text-slate-400 text-sm">Stock: {{ $product->stock }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Recent Orders -->
            @if($stats['recent_orders']->isNotEmpty())
            <div class="bg-slate-800/40 backdrop-blur-sm rounded-2xl border border-slate-700/50 p-8">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-6 h-6 text-orange-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Recent Orders
                </h3>
                <div class="space-y-4">
                    @foreach($stats['recent_orders'] as $order)
                    <div class="flex items-center justify-between p-4 bg-slate-700/30 rounded-xl border border-slate-600/30">
                        <div>
                            <h4 class="text-white font-semibold">Order #{{ $order->id }}</h4>
                            <p class="text-slate-400 text-sm">{{ $order->user->name ?? 'Guest' }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-orange-400 font-bold">{{ number_format($order->total_price, 0) }} LKR</p>
                            <p class="text-slate-400 text-sm">{{ $order->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        @endif

        <!-- Low Stock Alert -->
        @if($stats['low_stock_products']->isNotEmpty())
        <div class="mt-8">
            <div class="bg-red-900/20 backdrop-blur-sm rounded-2xl border border-red-500/30 p-8">
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-6 h-6 text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.314 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    Low Stock Alert
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($stats['low_stock_products'] as $product)
                    <div class="p-4 bg-red-800/20 rounded-xl border border-red-500/20">
                        <h4 class="text-white font-semibold">{{ $product->name }}</h4>
                        <p class="text-red-400 font-bold">Only {{ $product->stock }} left</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
