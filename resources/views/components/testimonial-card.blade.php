@props([
    'name',
    'position',
    'review',
    'initials',
    'photo' => null,
])

<article class="flex h-full flex-col rounded-2xl border border-[#DFD2C1] bg-[#FCFAF6] p-6 sm:p-7">
    <div class="flex items-center justify-between gap-4">
        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-8 w-8 text-[#886449]"
            aria-hidden="true"
        >
            <path d="M10 5H4v8h5c0 3-2 5-5 6" />
            <path d="M21 5h-6v8h5c0 3-2 5-5 6" />
        </svg>

        
    </div>

    <blockquote class="mt-6 flex-1">
        <p class="text-base leading-8 text-[#514438]">
            {{ $review }}
        </p>
    </blockquote>

    <div class="mt-7 flex items-center gap-3 border-t border-[#E8DDCE] pt-6">
        @if ($photo && file_exists(public_path($photo)))
            <img
                src="{{ asset($photo) }}"
                alt=""
                width="48"
                height="48"
                loading="lazy"
                decoding="async"
                class="h-12 w-12 shrink-0 rounded-full object-cover"
            >
        @else
            <span
                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border border-[#D9CCBC] bg-[#EDE4D8] font-serif text-lg text-[#78583F]"
                aria-hidden="true"
            >
                {{ $initials }}
            </span>
        @endif

        <div class="min-w-0">
            <p class="text-sm font-semibold text-[#352820]">
                {{ $name }}
            </p>

            <p class="mt-1 text-xs leading-5 text-[#756453]">
                {{ $position }}
            </p>
        </div>
    </div>
</article>