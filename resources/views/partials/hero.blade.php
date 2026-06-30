{{-- ============================== HERO ============================== --}}
<section id="inicio" class="grain relative flex min-h-svh items-end justify-center overflow-hidden bg-ocean-950">
    {{-- Backdrop --}}
    <div class="absolute inset-0">
        <picture>
            {{-- Desktop gets a slightly looser crop so the house centers; mobile keeps the tight crop --}}
            <source media="(min-width: 1024px)" srcset="{{ asset('images/riviera-hero-desktop.jpg') }}">
            <img
                src="{{ asset('images/riviera-hero.jpg') }}"
                alt="Riviera Residencial en Real del Mar"
                class="kenburns h-full w-full object-cover object-[center_62%] lg:object-center"
                fetchpriority="high"
            >
        </picture>
        {{-- subtle scrim — the dark road already carries the text --}}
        <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/75 via-transparent to-ocean-950/25"></div>
    </div>

    {{-- Copy — sits over the road at the bottom --}}
    <div class="reveal-group is-revealed relative z-10 mx-auto w-full max-w-3xl px-6 pb-32 text-center sm:pb-20">
        <p class="font-sans text-base font-light leading-snug tracking-wide text-sand-100/95 drop-shadow-[0_2px_16px_rgba(10,26,38,0.75)] sm:text-lg">
            La vida que <span class="font-bold text-sand-50">imaginabas</span>, hoy <span class="font-bold text-sand-50">existe</span> dentro de
        </p>
        <h1 class="display mt-2 text-5xl font-light leading-[1.04] text-sand-50 drop-shadow-[0_2px_28px_rgba(10,26,38,0.7)] sm:text-6xl lg:text-7xl">
            Riviera Residencial
        </h1>
        <p class="mx-auto mt-5 max-w-md text-sm leading-relaxed text-sand-100/90 drop-shadow-[0_2px_16px_rgba(10,26,38,0.7)] sm:max-w-xl sm:text-base">
            Residencias contemporáneas dentro de una comunidad privada rodeada de naturaleza, golf y vistas al mar.
        </p>
    </div>
</section>
