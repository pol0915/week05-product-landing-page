@props([
    'id',
    'name',
    'description',
    'price',
    'items' => [],
    'featured' => false,
])

<article @class([
    'flex h-full flex-col rounded-3xl border p-6 sm:p-8',
    'border-[#352820] bg-[#352820] text-[#F7F3EC] shadow-lg' => $featured,
    'border-[#DFD2C1] bg-[#FCFAF6] text-[#352820]' => !$featured,
])>
    <p @class([
        'text-[10px] font-semibold uppercase tracking-[0.18em]',
        'text-[#E1CBB0]' => $featured,
        'text-[#315B50]' => !$featured,
    ])>
        {{ $description }}
    </p>

    <h3 class="mt-4 font-serif text-3xl">
        {{ $name }}
    </h3>

    <div class="mt-7">
        <p class="flex items-baseline gap-1">
            <span class="text-xl">&#8369;</span>
            <span class="font-serif text-5xl tracking-tight">
                {{ number_format($price) }}
            </span>
        </p>

        <p @class([
            'mt-2 text-xs',
            'text-[#E1CBB0]' => $featured,
            'text-[#756453]' => !$featured,
        ])>
            Package total
        </p>
    </div>

    <div @class([
        'my-7 border-t',
        'border-white/20' => $featured,
        'border-[#E1D6C8]' => !$featured,
    ])></div>

    <p class="text-xs font-semibold uppercase tracking-widest">
        What's included
    </p>

    <ul class="mt-5 flex-1 space-y-4">
        @foreach ($items as $item)
            <li class="flex items-start gap-3">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    @class([
                        'mt-0.5 h-4 w-4 shrink-0',
                        'text-[#E1CBB0]' => $featured,
                        'text-[#315B50]' => !$featured,
                    ])
                    aria-hidden="true"
                >
                    <path d="m5 12 4 4L19 6" />
                </svg>

                <span @class([
                    'text-sm leading-6',
                    'text-[#F0E3D4]' => $featured,
                    'text-[#66584B]' => !$featured,
                ])>
                    {{ $item }}
                </span>
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <x-button
            :variant="$featured ? 'light' : 'primary'"
            class="w-full"
            aria-haspopup="dialog"
            aria-controls="package-{{ $id }}"
            aria-label="View {{ $name }} package"
            onclick="this.closest('article').querySelector('dialog').showModal()"
        >
            View Package
            <span aria-hidden="true">&rarr;</span>
        </x-button>

        
    </div>

    <dialog
        id="package-{{ $id }}"
        aria-labelledby="package-title-{{ $id }}"
        aria-describedby="package-description-{{ $id }}"
        class="m-auto max-h-[85vh] w-[calc(100%-2rem)] max-w-md overflow-y-auto rounded-3xl border border-[#DFD2C1] bg-[#F7F3EC] p-6 text-[#352820] shadow-2xl backdrop:bg-black/60 sm:p-8"
    >
        <form method="dialog">
            <div class="flex items-center justify-between gap-4">
                <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-[#315B50]">
                    Hometown Cafe
                </p>

                <button
                    type="submit"
                    value="close"
                    autofocus
                    aria-label="Close package details"
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#DFD2C1] hover:bg-[#E8DDCE] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#315B50]"
                >
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        class="h-5 w-5"
                        aria-hidden="true"
                    >
                        <path d="m6 6 12 12M18 6 6 18" />
                    </svg>
                </button>
            </div>

            <h2
                id="package-title-{{ $id }}"
                class="mt-5 font-serif text-3xl"
            >
                {{ $name }}
            </h2>

            <p
                id="package-description-{{ $id }}"
                class="mt-4 text-sm leading-7 text-[#66584B]"
            >
                Take a closer look at the drinks and bites included in this package.
            </p>

            <ul class="mt-6 space-y-3 rounded-2xl bg-[#EDE4D8] p-5">
                @foreach ($items as $item)
                    <li class="text-sm leading-6">{{ $item }}</li>
                @endforeach
            </ul>

            <div class="mt-6 flex items-center justify-between gap-4">
                <span class="text-sm text-[#66584B]">Package total</span>
                <span class="text-xl font-semibold">
                    &#8369;{{ number_format($price, 2) }}
                </span>
            </div>

            <x-button type="submit" value="close" class="mt-7 w-full">
                Back to Packages
            </x-button>
        </form>
    </dialog>
</article>