@extends('layouts.app')

@section('title', 'Hometown Cafe | Your Everyday Pause')

@section('content')
    <x-navbar />

    <main id="main-content">
        <x-hero />

        <section id="features" class="scroll-mt-40 xl:scroll-mt-24">
            <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
                <div class="grid gap-5 lg:grid-cols-2 lg:items-end lg:gap-12">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#886449]">
                            Make yourself at home
                        </p>

                        <h2 class="mt-4 max-w-xl font-serif text-3xl leading-tight sm:text-4xl">
                            Something for<br class="hidden sm:block">
                            your kind of day.
                        </h2>
                    </div>

                    <p class="max-w-md text-sm leading-7 text-[#66584B] lg:justify-self-end">
                        From your first sip to your last bite, explore
                        the little things that make a Hometown visit
                        part of your day.
                    </p>
                </div>

                <div class="mt-10 grid auto-rows-fr gap-5 sm:grid-cols-2 lg:grid-cols-3 lg:gap-6">
                    @foreach ([
                        [
                            'icon' => 'coffee',
                            'title' => 'Classic Coffee',
                            'description' => 'Keep it familiar with an Americano, Cappuccino, or Cafe Latte. Your everyday coffee, your way.',
                        ],
                        [
                            'icon' => 'sparkles',
                            'title' => 'Signature Lattes',
                            'description' => 'Try something different with Biscoff, Sea Salt, or Black Sesame Latte from the signature selection.',
                        ],
                        [
                            'icon' => 'leaf',
                            'title' => 'Matcha Selection',
                            'description' => 'Make room for a matcha moment. Explore Matcha Latte, Dirty Matcha, and other flavored options.',
                        ],
                        [
                            'icon' => 'utensils',
                            'title' => 'Meals and Snacks',
                            'description' => 'Stay for a bite with rice meals, pasta, sandwiches, and appetizers to go with your drink.',
                        ],
                        [
                            'icon' => 'home',
                            'title' => 'Dine In',
                            'description' => 'Settle into a seat and enjoy your order at the cafe, with outdoor seating available.',
                        ],
                        [
                            'icon' => 'bag',
                            'title' => 'Takeout and Pickup',
                            'description' => 'Bring your favorites along for the day. Contact the cafe for pickup details and availability.',
                        ],
                    ] as $feature)
                        <x-feature-card
                            :icon="$feature['icon']"
                            :title="$feature['title']"
                            :description="$feature['description']"
                        />
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
                        alt="Iced cafe latte in a clear glass on a wooden table."
                    />

                    <x-product-card
                        name="Biscoff Latte"
                        category="Signature Latte"
                        :price="195"
                        image="images/biscoff-latte.png"
                        alt="Iced Biscoff latte topped with biscuit crumbs and a biscuit."
                    />

                    <x-product-card
                        name="Matcha Latte"
                        category="Matcha"
                        :price="160"
                        image="images/matcha-latte.png"
                        alt="Iced matcha latte with green matcha and creamy milk layers."
                    />
                </div>

                <div class="mt-6 space-y-1 text-xs leading-6 text-[#F0E3D4]">
                    

                    <p>
                        Contact the cafe for current prices and availability.
                        
                    </p>
                </div>
            </div>
        </section>

        <x-showcase />

        <x-pricing />

        <x-testimonials />

        <x-contact />
    </main>

    <x-footer />
@endsection