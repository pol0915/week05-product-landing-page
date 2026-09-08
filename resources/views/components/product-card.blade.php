@props([
    'name',
    'category',
    'price',
    'image',
    'alt',
])

<article class="mx-auto flex h-full w-full max-w-[300px] flex-col overflow-hidden rounded-2xl border border-[#E1D6C8] bg-[#F7F3EC] shadow-sm">
    <div class="aspect-square overflow-hidden bg-[#EDE4D8]">
        <img
            src="{{ asset($image) }}"
            alt="{{ $alt }}"
            width="1254"
            height="1254"
            loading="lazy"
            decoding="async"
            class="h-full w-full object-cover"
        >
    </div>

    <div class="flex flex-1 flex-col border-t border-[#E8DDCE] p-5">
        <p class="text-[10px] font-semibold uppercase tracking-[0.14em] text-[#756453]">
            {{ $category }}
        </p>

        <div class="mt-3 flex flex-wrap items-baseline justify-between gap-x-3 gap-y-2">
            <h3 class="font-serif text-xl leading-tight text-[#352820]">
                {{ $name }}
            </h3>

            <p class="whitespace-nowrap text-sm font-semibold text-[#352820]">
                &#8369;{{ number_format($price, 2) }}
            </p>
        </div>
    </div>
</article>