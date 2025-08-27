<!-- Universal Navigation - Handles Both Guest and Authenticated Users -->
<nav x-data="{ open: false }" class="bg-gradient-to-r from-gray-900 via-purple-900 to-blue-900 shadow-lg border-b border-purple-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="@auth{{ route('dashboard') }}@else{{ route('welcome') }}@endauth" class="flex items-center space-x-3 group">
                    <!-- Tech Icon -->
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-2 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <!-- Brand Text -->
                    <div class="text-white">
                        <div class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                            PST TECH
                        </div>
                        <div class="text-xs text-gray-300 -mt-1">Elite Gaming Ecosystem</div>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                @guest
                    <!-- Guest Navigation Links -->
                    <a href="{{ route('welcome') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium">
                        Home
                    </a>
                    
                    
                    <!-- Categories Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium flex items-center">
                            Categories
                            <svg class="w-4 h-4 ml-1 transition-transform duration-300" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute left-0 mt-2 w-56 bg-gray-900/95 backdrop-blur-sm border border-purple-500/20 rounded-xl shadow-2xl z-50">
                            <div class="py-2">
                                <a href="{{ route('pages.laptops') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Gaming Laptops
                                </a>
                                <a href="{{ route('pages.graphiccards') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                    </svg>
                                    Graphics Cards
                                </a>
                                <a href="{{ route('pages.processors') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                    </svg>
                                    Gaming CPUs
                                </a>
                                <a href="{{ route('pages.motherboards') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Motherboards
                                </a>
                                <a href="{{ route('pages.rams') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Gaming RAM
                                </a>
                                <div class="border-t border-purple-500/20 my-2"></div>
                                <a href="{{ route('products.index') }}" class="flex items-center px-4 py-3 text-blue-400 hover:text-blue-300 hover:bg-blue-600/20 transition-colors duration-300 font-medium">
                                    
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium">
                        About Us
                    </a>
                    
                @endguest

                @auth
                    <!-- Authenticated User Navigation Links -->
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium {{ request()->routeIs('dashboard') ? 'bg-white/20 text-white' : '' }}">
                            Admin Dashboard
                        </a>
                    @endif
                    
                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium {{ request()->routeIs('about') ? 'bg-white/20 text-white' : '' }}">
                        About Us
                    </a>
                    
                    <!-- Categories Dropdown for Auth Users -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium flex items-center">
                            Categories
                            <svg class="w-4 h-4 ml-1 transition-transform duration-300" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute left-0 mt-2 w-56 bg-gray-900/95 backdrop-blur-sm border border-purple-500/20 rounded-xl shadow-2xl z-50">
                            <div class="py-2">
                                <a href="{{ route('pages.laptops') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Gaming Laptops
                                </a>
                                <a href="{{ route('pages.graphiccards') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                    </svg>
                                    Graphics Cards
                                </a>
                                <a href="{{ route('pages.processors') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                    </svg>
                                    Gaming CPUs
                                </a>
                                <a href="{{ route('pages.motherboards') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Motherboards
                                </a>
                                <a href="{{ route('pages.rams') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors duration-300">
                                    <svg class="w-5 h-5 text-purple-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Gaming RAM
                                </a>
                                @if(Auth::user()->role === 'admin')
                                    <div class="border-t border-purple-500/20 my-2"></div>
                                    <a href="{{ route('admin.categories.index') }}" class="flex items-center px-4 py-3 text-blue-400 hover:text-blue-300 hover:bg-blue-600/20 transition-colors duration-300 font-medium">
                                        <svg class="w-5 h-5 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Manage Categories
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.orders.index') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium {{ request()->routeIs('admin.orders.index') ? 'bg-white/20 text-white' : '' }}">
                            Manage Orders
                        </a>
                    @endif
                    <a href="{{ route('cart.index') }}" class="text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 font-medium {{ request()->routeIs('cart.index') ? 'bg-white/20 text-white' : '' }}">
                        Cart
                    </a>
                @endauth
            </div>

            <!-- Right Side - Auth Buttons or User Dropdown -->
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <!-- Guest Auth Buttons -->
                    <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="border border-purple-500 text-purple-400 hover:bg-purple-500 hover:text-white px-6 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        Register
                    </a>
                @endguest

                @auth
                    <!-- Authenticated User Dropdown -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 border border-purple-500/30 text-sm leading-4 font-medium rounded-lg text-white bg-gradient-to-r from-purple-600/20 to-blue-600/20 hover:from-purple-600/30 hover:to-blue-600/30 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all ease-in-out duration-300">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                        <span class="text-white font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>

                                <div class="ms-2">
                                    <svg class="fill-current h-4 w-4 text-purple-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="bg-gray-900 border border-purple-500/20 rounded-lg shadow-xl">
                                <div class="px-4 py-3 border-b border-purple-500/20">
                                    <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                                </div>
                                
                                <x-dropdown-link :href="route('profile.edit')" class="text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                                        </svg>
                                        <span>{{ __('Profile') }}</span>
                                    </div>
                                </x-dropdown-link>

                                @if(Auth::user()->role === 'admin')
                                    <x-dropdown-link :href="route('dashboard')" class="text-blue-400 hover:text-blue-300 hover:bg-blue-600/20 transition-colors">
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                            <span>Admin Panel</span>
                                        </div>
                                    </x-dropdown-link>
                                @endif

                                <x-dropdown-link href="#" class="text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                        </svg>
                                        <span>My Orders</span>
                                    </div>
                                </x-dropdown-link>

                                <x-dropdown-link href="#" class="text-gray-300 hover:text-white hover:bg-purple-600/20 transition-colors">
                                    <div class="flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                        </svg>
                                        <span>Settings</span>
                                    </div>
                                </x-dropdown-link>

                                <div class="border-t border-purple-500/20">
                                    <!-- Logout -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="text-red-400 hover:text-red-300 hover:bg-red-600/20 transition-colors">
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>{{ __('Log Out') }}</span>
                                            </div>
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = ! open" class="text-gray-300 hover:text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden bg-gray-900/95 backdrop-blur-sm border-t border-purple-500/20">
        <div class="px-4 pt-4 pb-6 space-y-3">
            @guest
                <!-- Guest Mobile Menu -->
                <a href="{{ route('welcome') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300">
                    Home
                </a>
                <a href="{{ route('products.index') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300">
                    Products
                </a>
                <a href="{{ route('pages.laptops') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300">
                    Categories
                </a>
                <a href="{{ route('about') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300">
                    About Us
                </a>
                
                <div class="pt-4 space-y-3 border-t border-purple-500/20">
                    <a href="{{ route('login') }}" class="block bg-gradient-to-r from-blue-600 to-purple-600 text-white text-center px-6 py-2 rounded-lg font-medium">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="block border border-purple-500 text-purple-400 text-center px-6 py-2 rounded-lg font-medium">
                        Register
                    </a>
                </div>
            @endguest

            @auth
                <!-- Authenticated Mobile Menu -->
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('dashboard') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-white/20 text-white' : '' }}">
                        Admin Dashboard
                    </a>
                @endif
                <a href="{{ route('about') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 {{ request()->routeIs('about') ? 'bg-white/20 text-white' : '' }}">
                    About Us
                </a>
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin.orders.index') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 {{ request()->routeIs('admin.orders.index') ? 'bg-white/20 text-white' : '' }}">
                        Manage Orders
                    </a>
                @endif
                <a href="{{ route('cart.index') }}" class="block text-gray-300 hover:text-white hover:bg-white/10 px-3 py-2 rounded-lg transition-all duration-300 {{ request()->routeIs('cart.index') ? 'bg-white/20 text-white' : '' }}">
                    Cart
                </a>

                <!-- User Info in Mobile -->
                <div class="pt-4 border-t border-purple-500/20">
                    <div class="flex items-center space-x-3 px-3 py-2">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                        <div>
                            <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    
                    <div class="mt-3 space-y-1">
                        <a href="{{ route('profile.edit') }}" class="block text-gray-300 hover:text-white hover:bg-purple-600/20 px-3 py-2 rounded-lg transition-colors">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                                </svg>
                                <span>Profile</span>
                            </div>
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button onclick="event.preventDefault(); this.closest('form').submit();" 
                                    class="w-full text-left text-red-400 hover:text-red-300 hover:bg-red-600/20 px-3 py-2 rounded-lg transition-colors">
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Log Out</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
