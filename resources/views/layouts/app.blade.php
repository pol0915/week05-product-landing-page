<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover Hometown Cafe in Pagsanjan, Laguna. Explore coffee, matcha, meals, and a place to slow down.">

    <title>@yield('title', 'Hometown Cafe')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-stone-800 antialiased">
    <a
        href="#main-content"
        class="sr-only focus:not-sr-only focus:block focus:p-4"
    >
        Skip to content
    </a>

    @yield('content')
</body>
</html>