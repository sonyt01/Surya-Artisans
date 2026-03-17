<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surya Artisan Products</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">



        <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <h1 class="text-2xl font-bold text-indigo-600">
            Surya Artisans
        </h1>

        <!-- Menu -->
        <div class="space-x-6 hidden md:flex">
            <a href="/welcome" class="text-gray-700 hover:text-indigo-600">Home</a>
            <a href="/products" class="text-gray-700 hover:text-indigo-600">Products</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">About</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Contact</a>
        </div>

        <!-- Button -->
        <a href="/products" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
            Register
        </a>

        <!-- Button -->
        <a href="/products" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
            Shop Now
        </a>

    </div>



<div class="max-w-7xl mx-auto p-6">

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

        <!-- Product 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet1.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Handmade Rug</h2>
                <p class="text-gray-500">Rs. 5,000</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet2.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Traditional Carpet</h2>
                <p class="text-gray-500">Rs. 7,500</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet3.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Modern Design Rug</h2>
                <p class="text-gray-500">Rs. 6,000</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>

           <!-- Product 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet4.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Modern Design Rug</h2>
                <p class="text-gray-500">Rs. 6,000</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>

           <!-- Product 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet5.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Modern Design Rug</h2>
                <p class="text-gray-500">Rs. 6,000</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>

           <!-- Product 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/carpet6.jpg') }}" class="w-full h-60 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Modern Design Rug</h2>
                <p class="text-gray-500">Rs. 6,000</p>
                <button class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded">
                    View Details
                </button>
            </div>
        </div>


    </div>

</div>
<div>
    <br>
    <br>
</div>
 <footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Brand -->
        <div>
            <h2 class="text-xl font-bold text-white mb-4">Surya Artisans</h2>
            <p>
                Where tradition, craftsmanship, and elegance are woven into every rug.
            </p><br>


        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">

            <!-- Facebook -->
            <a href="https://www.facebook.com/yourpage" target="_blank" class="hover:text-blue-500">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-3h2.5V9.5a3.5 3.5 0 0 1 3.7-3.8c1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.6v1.9h3l-.5 3h-2.5v7A10 10 0 0 0 22 12z"/>
                </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/suryaartisans" target="_blank" class="hover:text-pink-500">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h10zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
            </a>

            <!-- Phone -->
            <a href="tel:+61 410 926 011" class="hover:text-green-400">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.11-.21c1.21.49 2.53.76 3.88.76a1 1 0 0 1 1 1v3.5a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.35.27 2.67.76 3.88.11.25.05.55-.21 1.11l-2.43 2.43z"/>
                </svg>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/61410926011" target="_blank" class="hover:text-green-500">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M20.5 3.5A11.95 11.95 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.12.55 4.12 1.52 5.88L0 24l6.33-1.52A11.944 11.944 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.22-3.5-8.5zm-8.5 17c-1.97 0-3.85-.54-5.48-1.48l-.39-.23-3.76.91.95-3.67-.25-.38A9.963 9.963 0 0 1 2 12c0-5.52 4.48-10 10-10s10 4.48 10 10-4.48 10-10 10zm5.07-7.33c-.27-.13-1.6-.79-1.85-.88-.25-.09-.43-.13-.61.13s-.7.88-.85 1.06c-.16.18-.31.2-.57.07-.27-.13-1.14-.42-2.17-1.33-.8-.71-1.34-1.58-1.5-1.85-.16-.27-.02-.41.12-.54.12-.12.27-.31.4-.47.13-.16.17-.27.26-.45.09-.18.04-.34-.02-.47-.07-.13-.61-1.48-.84-2.04-.22-.53-.45-.46-.61-.46-.16 0-.34-.01-.52-.01s-.47.07-.71.34c-.25.27-.95.92-.95 2.25 0 1.33.98 2.62 1.12 2.8.14.18 1.94 2.97 4.7 4.17.66.28 1.17.45 1.57.58.66.21 1.26.18 1.73.11.53-.08 1.6-.65 1.82-1.28.22-.63.22-1.17.16-1.28-.06-.11-.25-.18-.52-.31z"/>
                </svg>
            </a>
        </div>
        </div>


        <!-- Links -->
        <div>
            <h2 class="text-lg font-semibold text-white mb-4">Quick Links</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('products') }}" class="hover:text-white">Products</a></li>
                <li><a href="#" class="hover:text-white">About</a></li>
                <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h2 class="text-lg font-semibold text-white mb-4">Contact</h2>
            <p>Email: info@suryaartisan.com</p>
            <p>Phone: +61 410 926 011</p>
            <p>Sydney, Australia</p>
        </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 text-center py-4 text-sm">
        © 2026 Surya Artisan. All rights reserved.
    </div>
</footer>

</body>
</html>
