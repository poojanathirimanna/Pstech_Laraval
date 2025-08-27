<!-- Professional Sidebar with Dark Elegant Theme -->
<aside id="sidebar" class="fixed top-0 left-0 z-40 h-screen bg-gradient-to-b from-slate-900 via-slate-800 to-blue-900 text-white w-16 transition-all duration-300 shadow-2xl border-r border-white/10 backdrop-blur-lg"
    onmouseenter="expandSidebar()" onmouseleave="collapseSidebar()">
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>
    
    <!-- Sidebar Content -->
    <div class="relative z-10 p-2">
        <!-- Header Space -->
        <div class="h-20 flex items-center justify-center mb-6">
            <div class="w-10 h-10 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav>
            <ul class="space-y-3">
                <li class="group">
                    <a href="{{ route('pages.laptops') }}" class="flex items-center p-3 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-sm border border-transparent hover:border-cyan-400/30 {{ request()->is('laptops') ? 'bg-cyan-600/20 border-cyan-400/50 backdrop-blur-sm' : '' }}">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium text-slate-200 group-hover:text-white transition-colors duration-300 whitespace-nowrap">Laptops</span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('pages.graphiccards') }}" class="flex items-center p-3 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-sm border border-transparent hover:border-cyan-400/30 {{ request()->is('graphic-cards') ? 'bg-cyan-600/20 border-cyan-400/50 backdrop-blur-sm' : '' }}">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium text-slate-200 group-hover:text-white transition-colors duration-300 whitespace-nowrap">Graphics Cards</span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('pages.processors') }}" class="flex items-center p-3 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-sm border border-transparent hover:border-cyan-400/30 {{ request()->is('processors') ? 'bg-cyan-600/20 border-cyan-400/50 backdrop-blur-sm' : '' }}">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium text-slate-200 group-hover:text-white transition-colors duration-300 whitespace-nowrap">Processors</span>
                    </a>
                </li>

                <li class="group">
                    <a href="{{ route('pages.motherboards') }}" class="flex items-center p-3 rounded-xl transition-all duration-300 hover:bg-white/10 hover:backdrop-blur-sm border border-transparent hover:border-cyan-400/30 {{ request()->is('motherboards') ? 'bg-cyan-600/20 border-cyan-400/50 backdrop-blur-sm' : '' }}">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <span class="ml-3 font-medium text-slate-200 group-hover:text-white transition-colors duration-300 whitespace-nowrap">Motherboards</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<script>
    function expandSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.add('w-64');
        sidebar.classList.remove('w-16');
        sidebar.querySelector('.relative.z-10').classList.add('p-4');
        sidebar.querySelector('.relative.z-10').classList.remove('p-2');
    }
    function collapseSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.add('w-16');
        sidebar.classList.remove('w-64');
        sidebar.querySelector('.relative.z-10').classList.add('p-2');
        sidebar.querySelector('.relative.z-10').classList.remove('p-4');
    }
</script>
