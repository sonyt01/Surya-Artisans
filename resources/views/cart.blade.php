<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFF8F0]">

@include('components.navbar') <!-- navbar -->

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <h1 class="text-3xl sm:text-4xl font-bold text-[#800000] mb-8 font-serif">
        Your Cart
    </h1>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="overflow-x-auto">
            <table class="w-full text-left border border-gray-300 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4">Product</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Quantity</th>
                        <th class="p-4">Total</th>
                        <th class="p-4">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    @foreach(session('cart') as $index => $item)
                        @php $total = $item['price'] * ($item['quantity'] ?? 1); $grandTotal += $total; @endphp
                        <tr class="border-t border-gray-300">
                            <td class="p-4 flex items-center space-x-4">
                                <img src="{{ asset($item['image']) }}" class="w-20 h-20 object-cover rounded-lg">
                                <span>{{ $item['name'] }}</span>
                            </td>
                            <td class="p-4">${{ $item['price'] }}</td>
                            <td class="p-4">
                                <form action="{{ route('cart.update', $index) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] ?? 1 }}" min="1" class="w-16 border rounded-lg px-2 py-1">
                                    <button type="submit" class="ml-2 px-3 py-1 bg-[#800000] text-white rounded-lg hover:bg-[#660000] transition">Update</button>
                                </form>
                            </td>
                            <td class="p-4">${{ $total }}</td>
                            <td class="p-4">
                                <form action="{{ route('cart.remove', $index) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                        Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-end items-center space-x-6">
            <span class="text-xl font-semibold">Grand Total: ${{ $grandTotal }}</span>
            <a href="{{ route('checkout') }}" class="px-6 py-3 bg-[#800000] text-white rounded-lg hover:bg-[#660000] transition">
                Checkout
            </a>
        </div>
    @else
        <p class="text-gray-700">Your cart is empty.</p>
    @endif

</div>

@include('components.footer')

</body>
</html>
