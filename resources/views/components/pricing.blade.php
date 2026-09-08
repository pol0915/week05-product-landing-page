<section
    id="pricing"
    aria-labelledby="pricing-heading"
    class="scroll-mt-40 bg-[#F7F3EC] xl:scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#886449]">
                A little something to share
            </p>

            <h2
                id="pricing-heading"
                class="mt-4 font-serif text-3xl leading-tight sm:text-4xl"
            >
                Pick your kind of coffee break.
            </h2>

            <p class="mt-5 text-sm leading-7 text-[#66584B]">
                Coffee and bites for a solo pause,
                a catch-up for two, or time around the table.
            </p>

            
        </div>

        <div class="mt-10 grid items-stretch gap-6 lg:grid-cols-3">
            <x-pricing-card
                id="solo"
                name="Solo Pause"
                description="A moment for yourself"
                :price="290"
                :items="[
                    '1 Cafe Latte',
                    '1 Corn Cheese Toast',
                ]"
            />

            <x-pricing-card
                id="duo"
                name="Coffee for Two"
                description="A catch-up over coffee"
                :price="485"
                :featured="true"
                :items="[
                    '1 Cafe Latte',
                    '1 Biscoff Latte',
                    '1 Classic Fries to share',
                ]"
            />

            <x-pricing-card
                id="group"
                name="Around the Table"
                description="A little time together"
                :price="1030"
                :items="[
                    '1 Cafe Latte and 1 Biscoff Latte',
                    '1 Matcha Latte and 1 Spanish Latte',
                    '1 Classic Fries',
                    '1 Beef Nachos',
                ]"
            />
        </div>

        
    </div>
</section>