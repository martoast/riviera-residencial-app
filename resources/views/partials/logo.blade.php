{{-- Riviera Residencial logo.
     variant 'white'  → white wordmark (use on dark backgrounds: hero nav, footer, preloader)
     variant 'auto'   → crossfades white ↔ dark text as the nav goes transparent ↔ solid
                        (keeps the colored compass emblem in both). --}}
@php
    $h = $class ?? 'h-7 w-auto';
    $variant = $variant ?? 'white';
@endphp
@if ($variant === 'auto')
    <span class="relative inline-block" role="img" aria-label="Riviera Residencial">
        <img src="{{ asset('images/riviera-logo.png') }}" alt="" aria-hidden="true"
            class="{{ $h }} transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-0' : 'opacity-100'">
        <img src="{{ asset('images/riviera-logo-dark.png') }}" alt="" aria-hidden="true"
            class="absolute left-0 top-0 {{ $h }} transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-100' : 'opacity-0'">
    </span>
@else
    <img src="{{ asset('images/riviera-logo.png') }}" alt="Riviera Residencial" class="{{ $h }}">
@endif
