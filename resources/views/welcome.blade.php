<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <header class="flex justify-between items-center p-4 border-b border-gray-200 bg-orange-300">
        <div>
            <h2>ERROR 404</h2>
        </div>
        <div>
            <ul class="flex text-xl space-x-4  lg:space-x-8">
                <input type="text" placeholder="Search Product" class="rounded-full p-2 text-md lg:text-lg sm:invisible md:invisible lg:visible">
                <a href="{{ route('cart') }}" class="p-2 lg:text-2xl">Cart</a>
                <button class="p-2 lg:text-2xl">Seller</button>
                <button class="bg-blue-500 p-2 rounded-lg">Login</button>
            </ul>
        </div>

    </header>
    </body>
</html>
