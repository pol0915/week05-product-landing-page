<section
    id="contact"
    aria-labelledby="contact-heading"
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

    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-16 lg:grid-cols-2 lg:items-center lg:px-8 lg:py-24">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#E1CBB0]">
                There's a corner for you here
            </p>

            <h2
                id="contact-heading"
                class="mt-5 font-serif text-4xl leading-tight sm:text-5xl"
            >
                Stay for a cup.<br>
                Stay for a while.
            </h2>

            <p class="mt-5 max-w-md leading-8 text-[#F0E3D4]">
                Take a break, catch up with someone, or simply
                enjoy your coffee. We look forward to your visit.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <x-button
                    href="https://www.facebook.com/Homecaphe.est21"
                    variant="light"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Contact the Cafe
                    <span aria-hidden="true">&rarr;</span>
                </x-button>

                <a
                    href="mailto:hometowncafe.est2021@gmail.com"
                    class="inline-flex min-h-12 items-center justify-center rounded-full border border-[#D4C2AB] px-6 py-3 text-sm font-semibold text-[#F7F3EC] transition-colors hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white"
                >
                    Send an Email
                </a>
            </div>

            <p class="mt-6 text-sm text-[#E1CBB0]">
                Dine-in &middot; Takeout &middot; Pickup
            </p>
        </div>

        <div class="rounded-3xl border border-white/20 bg-[#241A13]/75 p-6 sm:p-8">
            <div class="flex items-start gap-4">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path d="M20 10c0 6-8 11-8 11S4 16 4 10a8 8 0 1 1 16 0Z" />
                        <circle cx="12" cy="10" r="2.5" />
                    </svg>
                </div>

                <div>
                    <h3 class="font-serif text-2xl">
                        Hometown Cafe Pagsanjan
                    </h3>

                    <address class="mt-2 text-sm not-italic leading-7 text-[#F0E3D4]">
                        Sampaloc, Pagsanjan,<br>
                        Laguna, Philippines 4008
                    </address>
                </div>
            </div>

            <div class="mt-7 border-t border-white/20 pt-6">
                <h4 class="text-xs font-semibold uppercase tracking-widest text-[#E1CBB0]">
                    Opening Hours
                </h4>

                <dl class="mt-4 space-y-3 text-sm">
                    <div class="flex flex-wrap justify-between gap-x-5 gap-y-1">
                        <dt class="text-[#F0E3D4]">Sunday – Thursday</dt>
                        <dd class="font-medium">3:00 PM – 12:00 midnight</dd>
                    </div>

                    <div class="flex flex-wrap justify-between gap-x-5 gap-y-1">
                        <dt class="text-[#F0E3D4]">Friday – Saturday</dt>
                        <dd class="font-medium">3:00 PM – 2:00 AM</dd>
                    </div>
                </dl>
            </div>

            <div class="mt-7 border-t border-white/20 pt-6">
                <h4 class="text-xs font-semibold uppercase tracking-widest text-[#E1CBB0]">
                    Let's keep in touch
                </h4>

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