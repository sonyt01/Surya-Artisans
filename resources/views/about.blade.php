<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Surya Artisan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8F0]">

@include('components.navbar')

<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] font-serif mb-6">
        About Us
    </h1>

    <!-- Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- Text -->
        <div>
            <p class="text-gray-700 text-lg leading-relaxed">
                Surya Artisan is dedicated to preserving traditional craftsmanship while
                bringing elegance into modern homes. Each rug is carefully handmade
                by skilled artisans using techniques passed down through generations.
            </p>

            <p class="mt-4 text-gray-700 text-lg leading-relaxed">
                Our mission is to promote authentic artistry, support local communities,
                and deliver high-quality handcrafted products that tell a story.
            </p>
        </div>

        <!-- Image -->
        <div>
            <img src="{{ asset('images/carpet1.jpg') }}"
                 class="rounded-2xl shadow-lg w-full h-[400px] object-cover">
        </div>

    </div>

    <!-- Extra Section -->
    <div class="mt-16 text-center">
        <h2 class="text-2xl font-semibold text-[#800000] mb-4">
            Why Choose Us?
        </h2>

        <p class="text-gray-700 max-w-2xl mx-auto">
            ✔ Handmade with care <br>
            ✔ Authentic traditional designs <br>
            ✔ Premium quality materials <br>
            ✔ Supporting local artisans
        </p>
    </div>

</div>

@include('components.footer')

</body>
</html>
