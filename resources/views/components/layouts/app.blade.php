<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Application</title>
{{--        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">--}}
        @vite('resources/css/app.css')

    </head>
<body class="bg-gray-100">
<header class="flex justify-between items-center p-4">
    <div class="flex">
        <img src="{{ asset('images/menu.png') }}" width="30px" height="30px" alt="menu">
        <h2 class="ml-2 lg:text-xl">Flipkart Clone</h2>
    </div>
    <div>
        <ul class="flex text-xl space-x-4  lg:space-x-8">
            <input type="text" placeholder="Search Product" class="rounded-full p-2 text-md lg:text-lg hidden sm:hidden md:block lg:block md:w-80 lg:w-[700px]">

            <div class="flex">
                <img width="40px" height="40px" src="{{asset('images/login img.png')}}" class=" p-2 rounded-lg" alt="loginimg">
                <p class="flex justify-center items-center">Login</p>
            </div>
            <img src="{{ asset('images/cart.png') }}" width="40px" height="30px" class="p-2 lg:text-2xl" onclick="location.href='{{route('cart')}}'">
            <img src="{{asset('images/seller.png')}}" width="40px" height="40px" class="p-2 lg:text-2xl">
        </ul>
    </div>
</header>

<main class="p-6">
    {{ $slot }} <!-- Livewire will render content here -->
</main>
</body>
</html>
