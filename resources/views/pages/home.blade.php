@extends('layouts.app')

@section('title', 'Hometown Cafe | Your Everyday Coffee Stop')

@section('content')
    <header class="border-b border-stone-300">
        <nav
            aria-label="Main navigation"
            class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-5 px-6 py-5"
        >
            <a href="#home" class="text-xl font-bold">
                Hometown Cafe
            </a>

            <div class="flex flex-wrap gap-5 text-sm">
                <a href="#home" class="hover:underline">Home</a>
                <a href="#features" class="hover:underline">Features</a>
                <a href="#menu" class="hover:underline">Menu</a>
                <a href="#pricing" class="hover:underline">Pricing</a>
                <a href="#testimonials" class="hover:underline">Testimonials</a>
                <a href="#contact" class="hover:underline">Contact</a>
            </div>
        </nav>
    </header>

    <main id="main-content">
        <section
            id="home"
            class="mx-auto grid max-w-6xl items-center gap-10 px-6 py-16 md:grid-cols-2"
        >
            <div>
                <p class="text-sm uppercase tracking-widest text-stone-500">
                    Pagsanjan, Laguna
                </p>

                <h1 class="mt-4 text-4xl font-bold leading-tight md:text-5xl">
                    A little pause.
                    A cup of hometown.
                </h1>

                <p class="mt-5 max-w-lg leading-relaxed text-stone-600">
                    Find your next coffee favorite, enjoy a comforting meal,
                    and make time for good company at Hometown Cafe.
                </p>

                <div class="mt-7 flex flex-wrap gap-3">
                    <a
                        href="#menu"
                        class="rounded border border-stone-800 bg-stone-800 px-5 py-3 text-sm font-semibold text-white hover:bg-stone-700"
                    >
                        View Menu
                    </a>

                    <a
                        href="#contact"
                        class="rounded border border-stone-400 px-5 py-3 text-sm font-semibold hover:bg-stone-100"
                    >
                        Visit Us
                    </a>
                </div>
            </div>

            <div class="flex min-h-72 items-center justify-center rounded border border-dashed border-stone-400 bg-stone-100 p-8 text-center text-stone-500">
                Hometown Cafe photo will appear here.
            </div>
        </section>

        <section id="features" class="border-y border-stone-300 bg-stone-50">
            <div class="mx-auto max-w-6xl px-6 py-12">
                <h2 class="text-2xl font-bold">Something for your kind of day</h2>

                <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['title' => 'Classic Coffee', 'description' => 'Explore Americano, Cappuccino, Cafe Latte, and more.'],
                        ['title' => 'Signature Lattes', 'description' => 'Discover Biscoff, Sea Salt, and Black Sesame Latte.'],
                        ['title' => 'Matcha Selection', 'description' => 'Find your matcha favorite, from classic to flavored options.'],
                        ['title' => 'Meals and Snacks', 'description' => 'Choose from pasta, rice meals, sandwiches, and appetizers.'],
                        ['title' => 'Dine In', 'description' => 'Enjoy your order at the cafe, with outdoor seating available.'],
                        ['title' => 'Takeout and Pickup', 'description' => 'Take your cafe favorites with you. Contact the cafe for pickup details.']
                    ] as $feature)
                        <article class="rounded border border-stone-300 bg-white p-5">
                            <h3 class="font-semibold">{{ $feature['title'] }}</h3>

                            <p class="mt-2 text-sm leading-relaxed text-stone-600">
                                {{ $feature['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="menu" class="mx-auto max-w-6xl px-6 py-12">
            <h2 class="text-2xl font-bold">A taste of Hometown</h2>

            <p class="mt-2 text-stone-600">
                Selected items from the supplied cafe menu.
            </p>

            <div class="mt-6 grid gap-4 sm:grid-cols-3">
                @foreach ([
                    ['name' => 'Cafe Latte', 'category' => 'Classic Coffee', 'price' => 160],
                    ['name' => 'Biscoff Latte', 'category' => 'Signature Latte', 'price' => 195],
                    ['name' => 'Matcha Latte', 'category' => 'Matcha', 'price' => 160]
                ] as $product)
                    <article class="rounded border border-stone-300 p-5">
                        <p class="text-sm text-stone-500">
                            {{ $product['category'] }}
                        </p>

                        <h3 class="mt-2 text-lg font-semibold">
                            {{ $product['name'] }}
                        </h3>

                        <p class="mt-4 font-bold">
                            &#8369;{{ number_format($product['price'], 2) }}
                        </p>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="pricing" class="border-y border-stone-300 bg-stone-50">
            <div class="mx-auto max-w-6xl px-6 py-12">
                <h2 class="text-2xl font-bold">Cafe Packages</h2>

                <p class="mt-2 text-stone-600">
                    Wireframe: three proposed package cards will be placed here.
                    These will be labeled as student concepts.
                </p>
            </div>
        </section>

        <section id="testimonials" class="mx-auto max-w-6xl px-6 py-12">
            <h2 class="text-2xl font-bold">Customer Stories</h2>

            <p class="mt-2 text-stone-600">
                Wireframe: testimonial cards will be placed here.
                No customer reviews have been added yet.
            </p>
        </section>

        <section id="contact" class="border-t border-stone-300 bg-stone-100">
            <div class="mx-auto grid max-w-6xl gap-8 px-6 py-12 md:grid-cols-2">
                <div>
                    <h2 class="text-2xl font-bold">Make time for a cafe visit.</h2>

                    <p class="mt-3 text-stone-600">
                        Sampaloc, Pagsanjan, Laguna, Philippines
                    </p>

                    <a
                        href="https://www.facebook.com/Homecaphe.est21"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 inline-block rounded bg-stone-800 px-5 py-3 text-sm font-semibold text-white hover:bg-stone-700"
                    >
                        Contact on Facebook
                    </a>
                </div>

                <div>
                    <h3 class="font-semibold">Contact Information</h3>

                    <a
                        href="mailto:hometowncafe.est2021@gmail.com"
                        class="mt-3 block break-words text-sm underline"
                    >
                        hometowncafe.est2021@gmail.com
                    </a>

                    <p class="mt-3 text-sm text-stone-600">
                        Instagram: @hometowncafe.est21
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-stone-300 px-6 py-6">
        <div class="mx-auto flex max-w-6xl flex-wrap justify-between gap-3 text-sm text-stone-600">
            <p>&copy; {{ date('Y') }} Hometown Cafe.</p>
            <p>Student landing page project. Unofficial website.</p>
        </div>
    </footer>
@endsection