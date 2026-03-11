<!DOCTYPE html>
<html>
<head>
    <title>Clothing Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-black text-white min-h-screen p-5">
        <h2 class="text-2xl font-bold mb-8">Clothing Admin</h2>
        <ul class="space-y-4">
            <li><a href="#" class="hover:text-gray-300">Dashboard</a></li>
            <li><a href="#" class="hover:text-gray-300">Products</a></li>
            <li><a href="#" class="hover:text-gray-300">Orders</a></li>
            <li><a href="#" class="hover:text-gray-300">Customers</a></li>
            <li><a href="#" class="hover:text-gray-300">Reports</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-6">Dashboard Overview</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-gray-500">Total Products</h3>
                <p class="text-2xl font-bold mt-2">120</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-gray-500">Total Orders</h3>
                <p class="text-2xl font-bold mt-2">340</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-gray-500">Customers</h3>
                <p class="text-2xl font-bold mt-2">89</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-gray-500">Revenue</h3>
                <p class="text-2xl font-bold mt-2">$4,500</p>
            </div>

        </div>

        <!-- Recent Orders -->
        <div class="bg-white mt-8 p-6 rounded-xl shadow">
            <h2 class="text-xl font-bold mb-4">Recent Orders</h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2">#1001</td>
                        <td>John Doe</td>
                        <td>$120</td>
                        <td class="text-green-600">Completed</td>
                    </tr>
                    <tr>
                        <td class="py-2">#1002</td>
                        <td>Jane Smith</td>
                        <td>$75</td>
                        <td class="text-yellow-600">Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
