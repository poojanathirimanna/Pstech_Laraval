<!-- Header -->
<header class="bg-gray-800 text-white p-6 flex items-center justify-between shadow-lg">
    <!-- Logo Section -->
    <div class="text-2xl font-bold tracking-wide hover:text-[#F7941D] transition duration-300">
        <a href="../index.php">PST TECH</a>
    </div>

    <!-- Navigation Links -->
    <nav class="flex space-x-8 text-lg font-medium">
        <a href="./services.php" class="hover:text-[#F7941D] transition duration-300">
            Services
        </a>
        <a href="./contact.php" class="hover:text-[#F7941D] transition duration-300">
            Contact
        </a>
    </nav>

    <!-- User Section -->
    <div class="flex items-center space-x-6">
        <span class="text-lg font-semibold">
            Welcome, {{ Auth::user()->name }}!
        </span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-white bg-[#F7941D] py-2 px-4 rounded hover:bg-[#f5a728] transition duration-300">
                Sign Out
            </button>
        </form>
    </div>
</header>
