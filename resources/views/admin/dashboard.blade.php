<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-lg font-bold">Admin Dashboard</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-300">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Sidebar + Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white h-screen p-4">
            <ul class="space-y-4">
                <li class="hover:bg-gray-700 p-2 rounded">
                    <a href="#" class="block">Dashboard</a>
                </li>
                <li class="hover:bg-gray-700 p-2 rounded">
                <a href="{{ route('admin.categories.index') }}">Categories</a>
                </li>
                <li class="hover:bg-gray-700 p-2 rounded">
                    <a href="{{ route('admin.products.index') }}">Manage Products</a>
                </li>
                <li class="hover:bg-gray-700 p-2 rounded">
                    <a href="#" class="block">View Orders</a>
                </li>
                <li class="hover:bg-gray-700 p-2 rounded">
                    <a href="#" class="block">Settings</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Welcome, Admin!</h2>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-blue-500 text-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Users</h3>
                    <p class="text-3xl mt-2">150</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-green-500 text-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Products</h3>
                    <p class="text-3xl mt-2">320</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-yellow-500 text-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Orders</h3>
                    <p class="text-3xl mt-2">85</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-red-500 text-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Revenue</h3>
                    <p class="text-3xl mt-2">$5,250</p>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="mt-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Activities</h3>
                <table class="w-full bg-white shadow-md rounded">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-3 text-left">Date</th>
                            <th class="p-3 text-left">Activity</th>
                            <th class="p-3 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3">2025-02-01</td>
                            <td class="p-3">New User Registered</td>
                            <td class="p-3 text-green-500">Completed</td>
                        </tr>
                        <tr>
                            <td class="p-3">2025-02-01</td>
                            <td class="p-3">Order #123 Placed</td>
                            <td class="p-3 text-yellow-500">Pending</td>
                        </tr>
                        <tr>
                            <td class="p-3">2025-01-31</td>
                            <td class="p-3">Product Updated</td>
                            <td class="p-3 text-green-500">Completed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
