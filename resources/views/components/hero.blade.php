<section
    id="home"
    class="relative isolate scroll-mt-40 overflow-hidden bg-[#F7F3EC] xl:scroll-mt-24"
>
    <div class="relative z-10 mx-auto max-w-7xl px-5 pt-12 lg:px-8 lg:py-20">
        <div class="max-w-xl lg:w-1/2">
            <div class="flex items-center gap-3">
                <span
                    class="h-px w-9 bg-[#315B50]"
                    aria-hidden="true"
                ></span>

                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-[#756453]">
                    Your everyday pause
                </p>
            </div>

            <h1 class="mt-7 font-serif text-5xl leading-[1.08] tracking-tight sm:text-6xl xl:text-7xl">
                A little pause.<br>
                A cup of<br>
                <span class="italic text-[#886449]">hometown.</span>
            </h1>

            <p class="mt-6 max-w-md text-base leading-8 text-[#66584B]">
                Coffee you look forward to. Meals that feel familiar.
                A welcoming corner for catching up, settling in,
                and taking your time.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <x-button href="#menu">
                    Explore the Menu
                    <span aria-hidden="true">&rarr;</span>
                </x-button>

                <x-button href="#contact" variant="secondary">
                    Find Our Cafe
                </x-button>
            </div>

            <div class="mt-8 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs font-medium text-[#756453]">
                <span>Pagsanjan, Laguna</span>
                <span aria-hidden="true">&bull;</span>
                <span>Dine-in &amp; takeout</span>
            </div>
        </div>
    </div>

    <div class="relative mt-6 h-72 sm:h-96 lg:absolute lg:inset-0 lg:-z-10 lg:mt-0 lg:h-full">
        <img
            src="{{ asset('images/cafe-sign.jpeg') }}"
            alt="Hometown Cafe interior with its illuminated sign, warm table lamp, and wooden wall."
            width="1919"
            height="1279"
            fetchpriority="high"
            class="h-full w-full object-cover object-center lg:absolute lg:right-0 lg:w-[78%] lg:translate-x-[16%]"
        >

        <div
            class="pointer-events-none absolute inset-0 hidden lg:block"
            style="background: linear-gradient(90deg, #F7F3EC 0%, #F7F3EC 32%, rgba(247,243,236,0.98) 39%, rgba(247,243,236,0.82) 47%, rgba(247,243,236,0.35) 56%, rgba(247,243,236,0.06) 65%, rgba(247,243,236,0) 72%);"
            aria-hidden="true"
        ></div>

        <div
            class="pointer-events-none absolute inset-0 lg:hidden"
            style="background: linear-gradient(180deg, #F7F3EC 0%, rgba(247,243,236,0) 30%, rgba(247,243,236,0) 80%, #F7F3EC 100%);"
            aria-hidden="true"
        ></div>

        <div
            class="pointer-events-none absolute inset-x-0 bottom-0 hidden h-24 lg:block"
            style="background: linear-gradient(0deg, #F7F3EC, rgba(247,243,236,0));"
            aria-hidden="true"
        ></div>
    </div>
</section>

<div class="border-y border-[#E8DDCE] bg-[#F7F3EC]">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-10 gap-y-3 px-5 py-5 text-xs font-medium uppercase tracking-[0.14em] text-[#756453]">
        <span>Classic Coffee</span>
        <span>Signature Lattes</span>
        <span>Matcha Moments</span>
        <span>Comforting Meals</span>
    </div>
</div>