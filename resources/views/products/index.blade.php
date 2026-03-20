<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto">

        <h1 class="text-2xl font-bold mb-4">Dashboard - Products</h1>

        <!-- Admin Search Form -->
        <form action="{{ route('admin.products.search') }}" method="GET" class="flex mb-6">
            <input type="text" name="query" placeholder="Search products..."
                   class="border rounded-l px-4 py-2 flex-1"
                   value="{{ request('query') }}">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-r">🔍</button>
        </form>

        <!-- Products Table -->
        <table class="w-full bg-white rounded shadow">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $product->id }}</td>
                        <td class="px-4 py-2">{{ $product->name }}</td>
                        <td class="px-4 py-2">{{ $product->description }}</td>
                        <td class="px-4 py-2">${{ $product->price }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
