<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Registration Page -->
    <form action="{{ route('register') }}" method="POST" class="p-6">
        @csrf

        <input type="text" name="name" placeholder="Name" class="border p-2 block mb-4 w-full">

        <input type="email" name="email" placeholder="Email" class="border p-2 block mb-4 w-full">

        <input type="password" name="password" placeholder="Password" class="border p-2 block mb-4 w-full">

        <button class="bg-[#800000] text-white px-4 py-2 rounded">
            Register
        </button>
</body>
</html>
