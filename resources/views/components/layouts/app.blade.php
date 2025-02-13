<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Application</title>
        @vite('resources/css/app.css')

    </head>
<body class="bg-gray-100">
<x-layouts.header />

<main class="p-6">
    {{ $slot }} <!-- Livewire will render content here -->
</main>

<x-layouts.footer />

</body>

</html>
