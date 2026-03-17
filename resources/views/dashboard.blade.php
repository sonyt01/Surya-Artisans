<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">


<div class="max-w-7xl mx-auto p-6">

    <!-- Title -->
    <h1 class="text-3xl font-bold mb-8">Dashboard</h1>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Total Products -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-gray-500">Total Products</h2>
            <p class="text-2xl font-bold">12</p>
        </div>

        <!-- Orders -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-gray-500">Orders</h2>
            <p class="text-2xl font-bold">5</p>
        </div>

        <!-- Users -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-gray-500">Customers</h2>
            <p class="text-2xl font-bold">20</p>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="mt-10">
        <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>

        <div class="space-x-4">
            <a href="{{ route('products') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded">
               View Products
            </a>

            <a href="#"
               class="bg-green-600 text-white px-4 py-2 rounded">
               Add Product
            </a>
        </div>
    </div>

</div>


</body>
</html>
