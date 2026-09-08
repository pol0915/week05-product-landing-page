@php
    $links = [
        'Home' => '#home',
        'Features' => '#features',
        'Menu' => '#menu',
        'Showcase' => '#showcase',
        'Pricing' => '#pricing',
        'Testimonials' => '#testimonials',
        'Contact' => '#contact',
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-[#E8DDCE] bg-[#F7F3EC]/95 backdrop-blur-md">
    <nav aria-label="Main navigation" class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="flex min-h-22 items-center justify-between gap-5">
            <a
                href="{{ route('home') }}"
                class="flex shrink-0 items-center gap-3"
                aria-label="Hometown Cafe home"
            >
                <svg
                    viewBox="0 0 48 48"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="h-11 w-11"
                    aria-hidden="true"
                >
                    <path d="M5 22 24 5l19 17M11 24v17h26V24" />
                </svg>

                <span>
                    <span class="block text-base font-semibold tracking-[0.08em]">
                        HOMETOWN
                    </span>

                    <span class="mt-0.5 block text-[10px] tracking-[0.38em] text-[#756453]">
                        CAFE
                    </span>
                </span>
            </a>

            <div class="hidden items-center gap-4 xl:flex">
                @foreach ($links as $label => $href)
                    <a
                        href="{{ $href }}"
                        class="py-2 text-sm text-[#66584B] transition-colors hover:text-[#352820] focus-visible:outline-2 focus-visible:outline-offset-4"
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            <div class="hidden items-center gap-3 xl:flex">
                <x-button
                    variant="secondary"
                    data-open-signin
                    aria-haspopup="dialog"
                    aria-controls="signin-dialog"
                >
                    Sign In
                </x-button>

                <x-button href="#menu">Get Started</x-button>
            </div>

            <a
                href="#menu"
                class="rounded-full border border-[#CDBEAC] px-4 py-2 text-sm font-semibold hover:bg-[#E8DDCE] xl:hidden"
            >
                View Menu
            </a>
        </div>

        <details data-mobile-nav class="group border-t border-[#E8DDCE] xl:hidden">
            <summary class="flex cursor-pointer list-none items-center justify-between py-3 text-sm font-medium [&::-webkit-details-marker]:hidden">
                Explore Hometown

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    class="h-5 w-5 transition-transform group-open:rotate-180"
                    aria-hidden="true"
                >
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </summary>

            <div class="grid max-h-[65vh] gap-1 overflow-y-auto pb-5">
                @foreach ($links as $label => $href)
                    <a
                        href="{{ $href }}"
                        class="rounded-lg px-3 py-3 text-sm hover:bg-[#E8DDCE]"
                    >
                        {{ $label }}
                    </a>
                @endforeach

                <div class="mt-3 flex flex-wrap gap-3">
                    <x-button
                        variant="secondary"
                        data-open-signin
                        aria-haspopup="dialog"
                        aria-controls="signin-dialog"
                    >
                        Sign In
                    </x-button>

                    <x-button href="#menu">Get Started</x-button>
                </div>
            </div>
        </details>
    </nav>
</header>