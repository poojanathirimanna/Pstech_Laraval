<!-- Header -->
<header class="bg-gray-800 text-white p-4 flex items-center justify-between shadow-md">
    <div class="text-2xl font-bold">
        <a href="../index.php">PST TECH</a>
    </div>
    <nav class="space-x-6 flex-1 text-center">
        <!-- Example navigation links (if needed) -->
    </nav>

    @livewire('product-search')

    <div class="flex items-center space-x-4">
        @auth
        <span class="text-white">Welcome, {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-white bg-[#F7941D] py-2 px-4 rounded hover:bg-[#f5a728] transition duration-300">
                Sign Out
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="text-white hover:bg-[#f5a728] py-2 px-4 rounded hover:bg-[#f5a728] transition duration-300">
            Log In
        </a>
        <a href="{{ route('register') }}" class="text-white hover:bg-[#f5a728] py-2 px-4 rounded hover:bg-[#f5a728] transition duration-300">
            Register
        </a>
        @endauth
    </div>
</header>
