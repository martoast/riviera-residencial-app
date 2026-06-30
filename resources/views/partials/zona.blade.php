{{-- ============================== AMENIDADES DE LA ZONA / REAL DEL MAR ============================== --}}
@php
    $zona = [
        ['t' => 'Campo de golf',      'img' => 'riviera-golf.jpg'],
        ['t' => 'Hotel con alberca',  'img' => 'riviera-hotel.jpg'],
        ['t' => 'Restaurante',        'img' => 'rdm-am-restaurante.webp'],
        ['t' => 'Club hípico',        'img' => 'riviera-hipico.jpg'],
        ['t' => 'Escuela',            'img' => 'rdm-am-escuela.webp'],
        ['t' => 'Salón de eventos',   'img' => 'riviera-casaclub-pergola.jpg'],
        ['t' => 'Iglesia',            'img' => 'riviera-iglesia.jpg'],
        ['t' => 'Bar',                'img' => 'riviera-bar.jpg'],
        ['t' => 'Vistas panorámicas', 'img' => 'riviera-alberca-mar.jpg'],
    ];
@endphp

<section id="zona" class="overflow-hidden bg-sand-50 py-24 lg:py-32"
    x-data="{ nudge(dir) { const t = $refs.track; const c = t.querySelector('[data-card]'); const amt = c ? c.offsetWidth + 24 : 360; t.scrollBy({ left: dir * amt, behavior: 'smooth' }); } }">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
            <div class="reveal-group max-w-xl">
                <p class="eyebrow text-gold-500">Real del Mar</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Todo lo que rodea tu <span class="accent-italic">nueva vida</span></h2>
                <p class="mt-5 text-lg leading-relaxed text-ink-soft">Amenidades de la zona dentro de Real del Mar.</p>
            </div>
            <div class="flex gap-3">
                <button @click="nudge(-1)" aria-label="Anterior"
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/15 text-ink transition-colors hover:border-ink/40 hover:bg-ink hover:text-sand-50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="nudge(1)" aria-label="Siguiente"
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/15 text-ink transition-colors hover:border-ink/40 hover:bg-ink hover:text-sand-50">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-ref="track"
        class="mt-12 flex snap-x snap-mandatory gap-6 overflow-x-auto scroll-smooth px-6 pb-2 lg:px-10 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
        @foreach ($zona as $z)
            <article data-card class="group w-[70vw] shrink-0 snap-start sm:w-[320px] lg:w-[360px]">
                <div class="relative overflow-hidden rounded-2xl bg-ocean-950 shadow-lg shadow-ink/5">
                    <img src="{{ asset('images/' . $z['img']) }}" alt="{{ $z['t'] }} en Real del Mar" loading="lazy"
                        class="aspect-[3/4] w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/85 via-ocean-950/10 to-transparent"></div>
                    <h3 class="display absolute inset-x-0 bottom-0 p-6 text-2xl text-sand-50">{{ $z['t'] }}</h3>
                </div>
            </article>
        @endforeach
        <div class="w-2 shrink-0 lg:w-6" aria-hidden="true"></div>
    </div>
</section>
