<!-- Header -->
<header class="bg-gray-800 text-white p-4 flex items-center justify-between shadow-md">
        <div class="text-2xl font-bold"> <a href="../index.php">PST TECH</a></div>
        <nav class="space-x-6 flex-1 text-center">
            <!-- <a href="./services.php" class="hover:text-[#F7941D] transition duration-300 mx-4">Services</a>
            <a href="./contact.php" class="hover:text-[#F7941D] transition duration-300 mx-4">Contact</a> -->
        </nav>

        @livewire('product-search')

        <div>
        
        @auth
            Welcome
            @endauth
        </span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-white bg-[#F7941D] py-2 px-4 rounded hover:bg-[#f5a728] transition duration-300">
            @auth
            Sign Out
            @else
            Log In
            @endauth

        </div>
    </header>

 