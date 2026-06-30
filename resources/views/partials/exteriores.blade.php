{{-- ============================== GALERÍA DE EXTERIORES ============================== --}}
@php
    $exteriores = [
        ['img' => 'riviera-fachada.jpg',           't' => 'Fachada Murano', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'riviera-mazzorbo.jpg',          't' => 'Fachada Mazzorbo', 'span' => ''],
        ['img' => 'riviera-acceso.jpg',            't' => 'Acceso', 'span' => ''],
        ['img' => 'riviera-jardin.jpg',            't' => 'Jardín', 'span' => ''],
        ['img' => 'riviera-terraza.jpg',           't' => 'Terraza · Roof garden', 'span' => ''],
        ['img' => 'riviera-casaclub-pergola.jpg',  't' => 'Casa Club', 'span' => ''],
        ['img' => 'riviera-comunidad-alberca.jpg', 't' => 'Alberca', 'span' => ''],
        ['img' => 'riviera-alberca-mar.jpg',       't' => 'Vista al mar', 'span' => 'lg:col-span-2'],
    ];
@endphp

<section id="exteriores" class="bg-sand-50 py-24 lg:py-32"
    x-data="{ open: false, src: '', title: '' }" @keydown.escape.window="open = false">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-500">Exteriores</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Exteriores que conectan con el <span class="accent-italic">entorno</span></h2>
            <p class="mt-4 text-base leading-relaxed text-ink-soft">Fachadas, jardines, terrazas y vistas diseñadas para disfrutar la vida dentro de Real del Mar.</p>
        </div>

        <div class="reveal mt-12 grid auto-rows-[220px] grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($exteriores as $e)
                <button type="button" @click="open = true; src = '{{ asset('images/' . $e['img']) }}'; title = '{{ $e['t'] }}'"
                    class="group relative overflow-hidden rounded-2xl bg-ocean-950 {{ $e['span'] }}">
                    <img src="{{ asset('images/' . $e['img']) }}" alt="{{ $e['t'] }} — Riviera Residencial" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 text-[0.6rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100">{{ $e['t'] }}</span>
                </button>
            @endforeach
        </div>
    </div>

    {{-- Lightbox --}}
    <div x-show="open" x-cloak x-transition.opacity
        class="fixed inset-0 z-[90] flex items-center justify-center bg-ocean-950/90 p-4 lg:p-10" @click="open = false">
        <div class="relative max-h-full max-w-5xl" @click.stop>
            <button @click="open = false" aria-label="Cerrar"
                class="absolute -top-4 -right-4 flex h-10 w-10 items-center justify-center rounded-full bg-sand-50 text-ink shadow-lg">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
            <img :src="src" :alt="title" class="max-h-[85vh] w-auto rounded-xl object-contain shadow-2xl">
        </div>
    </div>
</section>
