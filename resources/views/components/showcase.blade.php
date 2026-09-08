@php
    $drinks = [
        [
            'name' => 'Cafe Latte',
            'price' => 160,
            'image' => 'images/cafe-latte.png',
        ],
        [
            'name' => 'Biscoff Latte',
            'price' => 195,
            'image' => 'images/biscoff-latte.png',
        ],
        [
            'name' => 'Matcha Latte',
            'price' => 160,
            'image' => 'images/matcha-latte.png',
        ],
    ];
@endphp

<section
    id="showcase"
    aria-labelledby="showcase-heading"
    class="scroll-mt-40 border-b border-[#E1D6C8] bg-[#EDE4D8] xl:scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
        <div class="grid gap-6 lg:grid-cols-2 lg:items-end lg:gap-12">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#886449]">
                    A closer look
                </p>

                <h2
                    id="showcase-heading"
                    class="mt-4 font-serif text-3xl leading-tight sm:text-4xl"
                >
                    A little Hometown,<br>
                    wherever you browse.
                </h2>
            </div>

            <div class="max-w-md lg:justify-self-end">
                <p class="text-sm leading-7 text-[#66584B]">
                    Discover drinks, check menu prices, and find the details for your next cafe visit.
                </p>

                
            </div>
        </div>

        <div class="mt-10 grid items-start gap-8 xl:grid-cols-[minmax(0,1fr)_250px]">
            <figure class="min-w-0">
                <div class="overflow-hidden rounded-2xl border border-[#CDBEAC] bg-[#FCFAF6] shadow-sm">
                    <div class="flex items-center justify-between gap-4 border-b border-[#DFD2C1] bg-[#E5D9C9] px-4 py-3">
                        <div class="flex gap-1.5" aria-hidden="true">
                            <span class="h-2 w-2 rounded-full bg-[#AC9680]"></span>
                            <span class="h-2 w-2 rounded-full bg-[#AC9680]"></span>
                            <span class="h-2 w-2 rounded-full bg-[#AC9680]"></span>
                        </div>

                        <p class="truncate text-[10px] font-medium tracking-wide text-[#66584B]">
                            Hometown Cafe · Guest dashboard
                        </p>

                        <span class="text-[10px] text-[#66584B]">Guest</span>
                    </div>

                    <div class="grid sm:grid-cols-[130px_minmax(0,1fr)]">
                        <div class="hidden border-r border-[#E1D6C8] bg-[#F0E8DD] p-4 sm:block">
                            <p class="text-[10px] font-semibold uppercase tracking-widest text-[#352820]">
                                Hometown
                            </p>

                            <p class="mt-1 text-[9px] uppercase tracking-[0.25em] text-[#756453]">
                                Cafe
                            </p>

                            <div class="mt-7 space-y-2 text-xs">
                                <p class="rounded-lg bg-[#352820] px-3 py-2.5 text-[#F7F3EC]">
                                    Overview
                                </p>

                                <p class="px-3 py-2.5 text-[#756453]">
                                    Our Menu
                                </p>

                                <p class="px-3 py-2.5 text-[#756453]">
                                    Cafe Details
                                </p>
                            </div>

                            <div class="mt-10 border-t border-[#D9CCBC] pt-4">
                                <p class="text-[10px] leading-5 text-[#756453]">
                                    Dine-in<br>
                                    Takeout<br>
                                    Pickup
                                </p>
                            </div>
                        </div>

                        <div class="min-w-0 p-4 sm:p-5">
                            <div class="flex flex-wrap items-center justify-between gap-3">
                                <p class="text-[10px] font-semibold uppercase tracking-widest text-[#886449]">
                                    Your coffee break starts here
                                </p>

                                <span class="rounded-full border border-[#DFD2C1] px-2.5 py-1 text-[10px] text-[#756453]">
                                    Guest
                                </span>
                            </div>

                            <h3 class="mt-4 font-serif text-2xl">
                                What sounds good today?
                            </h3>

                            <div class="mt-5 grid grid-cols-3 gap-2 sm:gap-3">
                                @foreach ($drinks as $drink)
                                    <div class="min-w-0 overflow-hidden rounded-xl border border-[#E1D6C8] bg-[#F7F3EC]">
                                        <img
                                            src="{{ asset($drink['image']) }}"
                                            alt=""
                                            width="1254"
                                            height="1254"
                                            loading="lazy"
                                            decoding="async"
                                            class="aspect-square w-full object-cover"
                                        >

                                        <div class="p-2 sm:p-3">
                                            <p class="text-[11px] font-semibold leading-5">
                                                {{ $drink['name'] }}
                                            </p>

                                            <p class="mt-1 text-[10px] text-[#756453]">
                                                &#8369;{{ number_format($drink['price'], 2) }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-4 rounded-xl border border-[#DFD2C1] bg-[#EDE4D8] p-4">
                                <p class="text-xs font-semibold">
                                    Planning a visit?
                                </p>

                                <p class="mt-1 text-[11px] leading-5 text-[#66584B]">
                                    Find us in Sampaloc, Pagsanjan, Laguna.
                                </p>

                                <a
                                    href="#contact"
                                    class="mt-2 inline-block py-1 text-[11px] font-semibold underline underline-offset-4"
                                >
                                    View cafe details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <figcaption class="mt-4 text-center text-xs leading-6 text-[#66584B]">
                    Desktop experience
                </figcaption>
            </figure>

            <figure class="mx-auto w-full max-w-[250px]">
                <div class="overflow-hidden rounded-[2.25rem] border-[7px] border-[#352820] bg-[#F7F3EC] shadow-sm">
                    <div class="flex items-center justify-between px-4 pb-2 pt-3 text-[9px] font-medium">
                        <span>9:41</span>
                        <span aria-hidden="true" class="h-1.5 w-8 rounded-full bg-[#352820]"></span>
                    </div>

                    <div class="border-b border-[#E1D6C8] px-4 py-3">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.12em]">
                            Hometown Cafe
                        </p>
                    </div>

                    <div class="p-4">
                        <p class="text-[9px] uppercase tracking-widest text-[#886449]">
                            A little pause
                        </p>

                        <h3 class="mt-2 font-serif text-2xl leading-tight">
                            Find your<br>next favorite.
                        </h3>

                        <div class="mt-4 space-y-3">
                            @foreach ($drinks as $drink)
                                <div class="flex items-center gap-3 rounded-xl border border-[#E1D6C8] bg-[#FCFAF6] p-2">
                                    <img
                                        src="{{ asset($drink['image']) }}"
                                        alt=""
                                        width="1254"
                                        height="1254"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-14 w-14 shrink-0 rounded-lg object-cover"
                                    >

                                    <div class="min-w-0">
                                        <p class="text-[11px] font-semibold leading-5">
                                            {{ $drink['name'] }}
                                        </p>

                                        <p class="mt-1 text-[10px] text-[#756453]">
                                            &#8369;{{ number_format($drink['price'], 2) }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a
                            href="#menu"
                            class="mt-5 flex min-h-11 items-center justify-center rounded-full bg-[#352820] px-3 py-2 text-xs font-semibold text-[#F7F3EC] hover:bg-[#514033]"
                        >
                            Explore Drinks
                        </a>
                    </div>

                    <div class="mx-auto mb-2 mt-1 h-1 w-20 rounded-full bg-[#352820]" aria-hidden="true"></div>
                </div>

                <figcaption class="mt-4 text-center text-xs leading-6 text-[#66584B]">
                    On your phone
                </figcaption>
            </figure>
        </div>

        <div class="mt-10 grid gap-6 border-t border-[#CDBEAC] pt-7 md:grid-cols-3">
            @foreach ([
                [
                    'title' => 'Discover your drink',
                    'description' => 'Clear product images make the featured selection easy to explore.',
                ],
                [
                    'title' => 'See the price',
                    'description' => 'Drink names and menu prices are presented together.',
                ],
                [
                    'title' => 'Plan your visit',
                    'description' => 'Cafe details are accessible from the browsing experience.',
                ],
            ] as $highlight)
                <div>
                    <h3 class="text-sm font-semibold text-[#352820]">
                        {{ $highlight['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-[#66584B]">
                        {{ $highlight['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

        
    </div>
</section>