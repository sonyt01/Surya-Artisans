<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8F0]"> <!-- Cream background -->

<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-[#800000] text-white shadow-md">
        <div class="p-6">
            <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        </div>

        <nav class="px-6 py-4 space-y-2">
            <a href="#" class="block py-2 px-4 rounded hover:bg-[#660000]">Dashboard</a>

            <a href="{{ route('productsView') }}"
               class="block py-2 px-4 rounded hover:bg-[#660000]">
               Products
            </a>

            <a href="#" class="block py-2 px-4 rounded hover:bg-[#660000]">Orders</a>
            <a href="#" class="block py-2 px-4 rounded hover:bg-[#660000]">Customers</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 overflow-y-auto">

        <h2 class="text-2xl font-semibold text-[#800000] mb-4">
            Welcome to the Admin Dashboard
        </h2>

        <p class="text-gray-700 mb-6">
            Here you can manage your products, view orders, and analyze customer data.
        </p>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-gray-500">Total Products</h2>
                <p class="text-3xl font-bold text-[#800000]">12</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-gray-500">Orders</h2>
                <p class="text-3xl font-bold text-[#800000]">5</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-gray-500">Customers</h2>
                <p class="text-3xl font-bold text-[#800000]">20</p>
            </div>

        </div>

        <!-- Quick Actions -->
        <div class="mt-10">
            <h2 class="text-xl font-semibold text-[#800000] mb-4">
                Quick Actions
            </h2>

            <div class="space-x-4">

                <a href="{{ route('productsView') }}"
                   class="bg-[#800000] text-white px-5 py-2 rounded-lg hover:bg-[#660000] transition">
                   View Products
                </a>

                <a href="{{ route('products') }}"
                   class="bg-[#A0522D] text-white px-5 py-2 rounded-lg hover:bg-[#7a3e22] transition">
                   Add Product
                </a>

            </div>
        </div>

    </div>
</div>

</body>
</html>
