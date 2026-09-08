@props([
    'title',
    'description',
    'icon' => 'coffee',
])

@php
    $icons = [
        'coffee' => [
            'M4 9h12v7a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4V9Z',
            'M16 10h2a3 3 0 1 1 0 6h-2',
            'M7 3v2M11 3v2M3 22h16',
        ],
        'sparkles' => [
            'm12 3 2.5 6.5L21 12l-6.5 2.5L12 21l-2.5-6.5L3 12l6.5-2.5L12 3Z',
            'M20 2v4M18 4h4',
        ],
        'leaf' => [
            'M20 3c-6 0-12 1-15 5-3 4-1 10 4 11 7 2 12-6 11-16Z',
            'M4 21 15 10',
        ],
        'utensils' => [
            'M4 3v6a3 3 0 0 0 6 0V3',
            'M7 3v18',
            'M20 3c-4 2-5 5-5 9h5',
            'M20 3v18',
        ],
        'home' => [
            'm3 10 9-7 9 7',
            'M5 9v12h14V9',
            'M9 21v-7h6v7',
        ],
        'bag' => [
            'M5 7h14l1 14H4L5 7Z',
            'M9 9V6a3 3 0 0 1 6 0v3',
        ],
    ];

    $paths = $icons[$icon] ?? $icons['coffee'];
@endphp

<article class="h-full rounded-2xl border border-[#E1D6C8] bg-[#FCFAF6] p-6 transition-colors hover:border-[#809C89] hover:bg-[#FFFDF9] sm:p-7">
    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-[#DFD2C1] bg-[#EDE4D8] text-[#886449]">
        <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-6 w-6"
            aria-hidden="true"
        >
            @foreach ($paths as $path)
                <path d="{{ $path }}" />
            @endforeach
        </svg>
    </div>

    <h3 class="mt-6 font-serif text-2xl leading-tight text-[#352820]">
        {{ $title }}
    </h3>

    <p class="mt-3 text-sm leading-7 text-[#66584B]">
        {{ $description }}
    </p>
</article>