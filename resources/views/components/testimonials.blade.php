<section
    id="testimonials"
    aria-labelledby="testimonials-heading"
    class="scroll-mt-40 border-t border-[#E1D6C8] bg-[#EDE4D8] xl:scroll-mt-24"
>
    <div class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
        <div class="grid gap-5 lg:grid-cols-2 lg:items-end lg:gap-12">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#886449]">
                    Around the coffee table
                </p>

                <h2
                    id="testimonials-heading"
                    class="mt-4 font-serif text-3xl leading-tight sm:text-4xl"
                >
                    Little moments.<br>
                    Stories worth sharing.
                </h2>
            </div>

            <p class="max-w-md text-sm leading-7 text-[#66584B] lg:justify-self-end">
                An example of how guest experiences could be featured
                on the cafe website. The names and reviews below are
                fictional sample content for this student project.
            </p>
        </div>

        <div class="mt-10 grid items-stretch gap-5 md:grid-cols-3 lg:gap-6">
            <x-testimonial-card
                name="Alex D."
                position="Student · Fictional profile"
                initials="AD"
                photo="images/guest-alex.png"
                review="A quiet coffee break was exactly what I needed after a busy week. I liked having a comfortable corner to sit, enjoy my latte, and slow down for a while."
            />

            <x-testimonial-card
                name="Jamie R."
                position="Designer · Fictional profile"
                initials="JR"
                photo="images/guest-jamie.png"
                review="The warm lighting and simple interiors made our afternoon catch-up feel relaxed. We took our time over coffee and shared a snack while catching up."
            />

            <x-testimonial-card
                name="Sam C."
                position="Local resident · Fictional profile"
                initials="SC"
                photo="images/guest-sam.png"
                review="I enjoyed being able to choose something beyond my usual coffee. A matcha latte, a bite to eat, and good company made for a lovely little break."
            />
        </div>
    </div>
</section>