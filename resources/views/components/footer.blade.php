<footer class="bg-[#2B211B] text-[#F7F3EC]">
    <div class="mx-auto max-w-7xl px-5 pb-7 pt-12 lg:px-8 lg:pt-16">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
            <div class="sm:col-span-2 lg:col-span-2">
                <a
                    href="{{ route('home') }}#home"
                    class="inline-flex items-center gap-3"
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

                        <span class="mt-1 block text-[10px] tracking-[0.38em] text-[#D4C2AB]">
                            CAFE
                        </span>
                    </span>
                </a>

                <p class="mt-5 max-w-sm text-sm leading-7 text-[#D4C2AB]">
                    Coffee, comforting meals, and a little space
                    to slow down in Pagsanjan, Laguna.
                </p>

                <div class="mt-5 flex items-center gap-3">
                    <a
                        href="https://www.facebook.com/Homecaphe.est21"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Hometown Cafe on Facebook"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-[#665344] transition-colors hover:bg-[#49382C] focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#E1CBB0]"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <path d="M14 21v-8h3l.5-4H14V7c0-1.1.4-2 2-2h2V1.5A24 24 0 0 0 15 1c-3 0-5 1.8-5 5v3H7v4h3v8h4Z" />
                        </svg>
                    </a>

                    <a
                        href="https://www.instagram.com/hometowncafe.est21/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Hometown Cafe on Instagram"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-[#665344] transition-colors hover:bg-[#49382C] focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#E1CBB0]"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.6"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h2 class="text-xs font-semibold uppercase tracking-[0.16em]">
                    Explore
                </h2>

                <nav aria-label="Footer navigation" class="mt-4">
                    <ul class="space-y-1">
                        @foreach ([
                            'Home' => 'home',
                            'Features' => 'features',
                            'Menu' => 'menu',
                            'Packages' => 'pricing',
                            'Customer Stories' => 'testimonials',
                            'Contact' => 'contact',
                        ] as $label => $section)
                            <li>
                                <a
                                    href="{{ route('home') }}#{{ $section }}"
                                    class="inline-block py-2 text-sm text-[#D4C2AB] hover:text-white hover:underline hover:underline-offset-4"
                                >
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div>
                <h2 class="text-xs font-semibold uppercase tracking-[0.16em]">
                    Visit &amp; Connect
                </h2>

                <address class="mt-6 text-sm not-italic leading-7 text-[#D4C2AB]">
                    Sampaloc, Pagsanjan,<br>
                    Laguna, Philippines 4008
                </address>

                <a
                    href="mailto:hometowncafe.est2021@gmail.com"
                    class="mt-4 block break-words text-sm leading-7 text-[#D4C2AB] hover:text-white hover:underline hover:underline-offset-4"
                >
                    hometowncafe.est2021@gmail.com
                </a>

                <a
                    href="{{ route('home') }}#contact"
                    class="mt-4 inline-flex items-center gap-2 py-2 text-sm font-medium"
                >
                    View opening hours
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>

        <div class="mt-10 flex flex-wrap items-center justify-between gap-x-6 gap-y-3 border-t border-[#514033] pt-6 text-xs leading-6 text-[#D4C2AB]">
            <p>&copy; {{ date('Y') }} Hometown Cafe.</p>

            <p>Student landing page project. Unofficial website.</p>

            <a href="#home" class="inline-flex items-center gap-2 py-2 hover:text-white">
                Back to top
                <span aria-hidden="true">&uarr;</span>
            </a>
        </div>
    </div>
</footer>