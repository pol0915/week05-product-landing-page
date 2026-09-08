@extends('layouts.app')

@section('title', 'Hometown Cafe | Your Everyday Pause')

@section('content')
    <x-navbar />

    <main id="main-content">
        <x-hero />

        <section id="features" class="scroll-mt-40 xl:scroll-mt-24">
            <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#886449]">
                    Make yourself at home
                </p>

                <h2 class="mt-4 max-w-xl font-serif text-3xl leading-tight sm:text-4xl">
                    Something for your kind of day.
                </h2>

                <div class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['title' => 'Classic Coffee', 'description' => 'Explore Americano, Cappuccino, Cafe Latte, and more.'],
                        ['title' => 'Signature Lattes', 'description' => 'Discover Biscoff, Sea Salt, and Black Sesame Latte.'],
                        ['title' => 'Matcha Selection', 'description' => 'Find your matcha favorite, from classic to flavored options.'],
                        ['title' => 'Meals and Snacks', 'description' => 'Choose from pasta, rice meals, sandwiches, and appetizers.'],
                        ['title' => 'Dine In', 'description' => 'Enjoy your order at the cafe, with outdoor seating available.'],
                        ['title' => 'Takeout and Pickup', 'description' => 'Take your cafe favorites with you. Contact the cafe for pickup details.']
                    ] as $feature)
                        <article class="rounded-2xl border border-[#E1D6C8] bg-[#FCFAF6] p-6 transition-shadow hover:shadow-md">
                            <p class="text-xs font-semibold tracking-widest text-[#886449]">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </p>

                            <h3 class="mt-5 text-lg font-semibold">
                                {{ $feature['title'] }}
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-[#66584B]">
                                {{ $feature['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section
            id="menu"
            class="relative isolate scroll-mt-40 overflow-hidden bg-[#352820] xl:scroll-mt-24"
        >
            <img
                src="{{ asset('images/cafe-counter.jpeg') }}"
                alt=""
                aria-hidden="true"
                width="1919"
                height="1279"
                loading="lazy"
                decoding="async"
                class="absolute inset-0 -z-20 h-full w-full object-cover object-center"
            >

            <div
                class="absolute inset-0 -z-10 bg-[#241A13]/80"
                aria-hidden="true"
            ></div>

            <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
                <div class="max-w-xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#E1CBB0]">
                        From our counter to your table
                    </p>

                    <h2 class="mt-4 font-serif text-3xl text-[#FFF9F0] sm:text-4xl">
                        Find your next favorite.
                    </h2>

                    <p class="mt-4 leading-7 text-[#F0E3D4]">
                        A familiar classic or something a little different.
                        Start with a cup that feels like you.
                    </p>
                </div>

                <div class="mt-9 grid grid-cols-1 items-stretch gap-5 md:grid-cols-3 lg:gap-6">
                    <x-product-card
                        name="Cafe Latte"
                        category="Classic Coffee"
                        :price="160"
                        image="images/cafe-latte.png"
                        alt="AI-generated illustration of an iced cafe latte in a clear glass on a wooden table."
                    />

                    <x-product-card
                        name="Biscoff Latte"
                        category="Signature Latte"
                        :price="195"
                        image="images/biscoff-latte.png"
                        alt="AI-generated illustration of an iced Biscoff latte topped with biscuit crumbs and a biscuit."
                    />

                    <x-product-card
                        name="Matcha Latte"
                        category="Matcha"
                        :price="160"
                        image="images/matcha-latte.png"
                        alt="AI-generated illustration of an iced matcha latte with green matcha and creamy milk layers."
                    />
                </div>

                <div class="mt-6 space-y-1 text-xs leading-6 text-[#F0E3D4]">
                    <p>
                        Drink images are AI-generated illustrations.
                        Actual presentation may vary.
                    </p>
                    <p>
                        Prices are based on the supplied menu.
                        Confirm current prices and availability with the cafe.
                    </p>
                </div>
            </div>
        </section>

        <section id="pricing" class="scroll-mt-40 xl:scroll-mt-24">
            <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                <h2 class="font-serif text-3xl sm:text-4xl">
                    Cafe Packages
                </h2>

                <p class="mt-4 max-w-2xl leading-7 text-[#66584B]">
                    Wireframe: three proposed package cards will be placed here.
                    These will be labeled as student concepts.
                </p>
            </div>
        </section>

        <section
            id="testimonials"
            class="scroll-mt-40 border-t border-[#E8DDCE] xl:scroll-mt-24"
        >
            <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8">
                <h2 class="font-serif text-3xl sm:text-4xl">
                    Customer Stories
                </h2>

                <p class="mt-4 max-w-2xl leading-7 text-[#66584B]">
                    Wireframe: testimonial cards will be placed here.
                    No customer reviews have been added yet.
                </p>
            </div>
        </section>

        <section
            id="contact"
            class="relative isolate scroll-mt-40 overflow-hidden bg-[#352820] text-[#F7F3EC] xl:scroll-mt-24"
        >
            <img
                src="{{ asset('images/cafe-lounge.jpeg') }}"
                alt=""
                aria-hidden="true"
                width="1919"
                height="1279"
                loading="lazy"
                decoding="async"
                class="absolute inset-0 -z-20 h-full w-full object-cover object-center"
            >

            <div
                class="absolute inset-0 -z-10"
                style="background: linear-gradient(90deg, rgba(36,26,19,0.94) 0%, rgba(36,26,19,0.86) 50%, rgba(36,26,19,0.76) 100%);"
                aria-hidden="true"
            ></div>

            <div class="mx-auto grid max-w-7xl gap-12 px-5 py-20 md:grid-cols-2 lg:px-8 lg:py-24">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#E1CBB0]">
                        There's a corner for you here
                    </p>

                    <h2 class="mt-5 font-serif text-4xl leading-tight sm:text-5xl">
                        Stay for a cup.<br>
                        Stay for a while.
                    </h2>

                    <p class="mt-5 max-w-md leading-8 text-[#F0E3D4]">
                        Take a break, catch up with someone, or simply
                        enjoy your coffee. We look forward to your visit.
                    </p>

                    <x-button
                        href="https://www.facebook.com/Homecaphe.est21"
                        variant="light"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-7"
                    >
                        Contact the Cafe
                        <span aria-hidden="true">&rarr;</span>
                    </x-button>
                </div>

                <div class="rounded-2xl border border-white/20 bg-[#241A13]/70 p-6 sm:p-8 md:self-center">
                    <h3 class="font-serif text-2xl">
                        Come find us.
                    </h3>

                    <div class="mt-6">
                        <p class="text-xs font-semibold uppercase tracking-widest text-[#E1CBB0]">
                            Pagsanjan
                        </p>

                        <p class="mt-2 text-sm leading-7 text-[#F0E3D4]">
                            Sampaloc, Pagsanjan,<br>
                            Laguna, Philippines
                        </p>
                    </div>

                    <div class="mt-6 border-t border-white/20 pt-6">
                        <p class="text-xs font-semibold uppercase tracking-widest text-[#E1CBB0]">
                            Let's keep in touch
                        </p>

                        <a
                            href="mailto:hometowncafe.est2021@gmail.com"
                            class="mt-3 block break-words text-sm leading-6 text-[#F0E3D4] underline underline-offset-4 hover:text-white"
                        >
                            hometowncafe.est2021@gmail.com
                        </a>

                        <a
                            href="https://www.instagram.com/hometowncafe.est21/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-3 inline-block text-sm leading-6 text-[#F0E3D4] hover:underline hover:underline-offset-4"
                        >
                            Instagram: @hometowncafe.est21
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-[#352820] px-5 py-7 text-[#D4C2AB] lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-wrap justify-between gap-3 text-xs leading-6">
            <p>&copy; {{ date('Y') }} Hometown Cafe.</p>
            <p>Student landing page project. Unofficial website.</p>
        </div>
    </footer>
@endsection