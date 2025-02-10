<aside id="sidebar" class="fixed top-[564x] left-0 z-50 h-screen bg-gray-900 text-white w-16 p-2 transition-all duration-300"
    onmouseenter="expandSidebar()" onmouseleave="collapseSidebar()">
    <ul class="space-y-4">
        <li class="hover:bg-gray-800 p-2 rounded {{ request()->is('laptops') ? 'bg-gray-800' : '' }}">
            <a href="{{ route('pages.laptops') }}" class="block">Laptops</a>
        </li>
        <li class="hover:bg-gray-800 p-2 rounded {{ request()->is('graphic-cards') ? 'bg-gray-800' : '' }}">
            <a href="{{ route('pages.graphiccards') }}" class="block">Graphic Cards</a>
        </li>
        <!-- <li class="hover:bg-gray-800 p-2 rounded {{ request()->is('ram') ? 'bg-gray-800' : '' }}">
            <a href="{{ route('pages.rams') }}" class="block">RAM</a>
        </li> -->
        <li class="hover:bg-gray-800 p-2 rounded {{ request()->is('processors') ? 'bg-gray-800' : '' }}">
            <a href="{{ route('pages.processors') }}" class="block">Processors</a>
        </li>
        <li class="hover:bg-gray-800 p-2 rounded {{ request()->is('motherboards') ? 'bg-gray-800' : '' }}">
            <a href="{{ route('pages.motherboards') }}" class="block">Motherboards</a>
        </li>
        <li class="mt-4">
                <a href="{{ route('cart.index') }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                    View Cart
                </a>
        </li>
    </ul>
</aside>

<script>
    function expandSidebar() {
        document.getElementById('sidebar').classList.add('w-60', 'p-4');
        document.getElementById('sidebar').classList.remove('w-16', 'p-2');
    }
    function collapseSidebar() {
        document.getElementById('sidebar').classList.add('w-16', 'p-2');
        document.getElementById('sidebar').classList.remove('w-60', 'p-4');
    }
</script>
