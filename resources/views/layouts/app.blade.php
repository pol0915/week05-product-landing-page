<!DOCTYPE html>
<html lang="en" class="scroll-smooth motion-reduce:scroll-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F7F3EC">
    <meta name="description" content="Coffee, comforting meals, and a place to slow down. Discover Hometown Cafe in Pagsanjan, Laguna.">

    <title>@yield('title', 'Hometown Cafe')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F7F3EC] font-sans text-[#352820] antialiased">
    <a
        href="#main-content"
        class="sr-only fixed left-4 top-4 z-50 rounded-lg bg-[#352820] px-5 py-3 text-white focus:not-sr-only"
    >
        Skip to content
    </a>

    @yield('content')

    <x-sign-in />

    @stack('scripts')
</body>
</html>