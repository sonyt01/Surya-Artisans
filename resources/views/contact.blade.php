<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Surya Artisan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8F0]">

@include('components.navbar')

<div class="max-w-7xl mx-auto px-6 py-16">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] font-serif mb-8">
        Contact Us
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">



        <!-- Contact Info -->
        <div class="flex flex-col justify-center space-y-4 text-gray-700">

            <h2 class="text-2xl font-semibold text-[#800000]">
                Get in Touch
            </h2>

            <p>Email: info@suryaartisan.com</p>
            <p>Phone: +61 410 926 011</p>
            <p>Location: Sydney, Australia</p>

        </div>

    </div>

</div>

@include('components.footer')

</body>
</html>
