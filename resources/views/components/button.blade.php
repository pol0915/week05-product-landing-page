@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $base = 'inline-flex min-h-12 items-center justify-center gap-2 rounded-full px-6 py-3 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#315B50] disabled:cursor-not-allowed disabled:opacity-50';

    $variants = [
        'primary' => 'border border-[#352820] bg-[#352820] text-[#F7F3EC] hover:border-[#514033] hover:bg-[#514033]',
        'secondary' => 'border border-[#CDBEAC] bg-transparent text-[#352820] hover:border-[#BBA58C] hover:bg-[#E8DDCE]',
        'light' => 'border border-[#F7F3EC] bg-[#F7F3EC] text-[#352820] hover:border-[#E8DDCE] hover:bg-[#E8DDCE]',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->class([$classes]) }}>
        {{ $slot }}
    </button>
@endif