{{-- ============================== GALERÍA DE PLANOS (lightbox) ============================== --}}
@php
    $planos = [
        ['n' => 'Murano', 'img' => 'riviera-plano-murano.jpg'],
        ['n' => 'Mazzorbo', 'img' => 'riviera-plano-mazzorbo.jpg'],
    ];
@endphp

<section id="planos" class="bg-sand-50 py-24 lg:py-32"
    x-data="{ open: false, src: '', title: '' }"
    @keydown.escape.window="open = false">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-10">
        <div class="reveal-group">
            <p class="eyebrow text-gold-500">Distribuciones</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Distribuciones pensadas para <span class="accent-italic">vivir mejor</span></h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-ink-soft">
                Conoce la distribución de cada modelo y encuentra la residencia que mejor se adapta a tu estilo de vida.
            </p>
        </div>

        <div class="reveal mt-12 grid gap-6 sm:grid-cols-2">
            @foreach ($planos as $p)
                <button type="button"
                    @click="open = true; src = '{{ asset('images/' . $p['img']) }}'; title = 'Plano {{ $p['n'] }}'"
                    class="group overflow-hidden rounded-2xl bg-white shadow-lg shadow-ink/5 ring-1 ring-ink/5 transition-transform hover:-translate-y-1">
                    <div class="relative">
                        <img src="{{ asset('images/' . $p['img']) }}" alt="Plano del modelo {{ $p['n'] }}" loading="lazy"
                            class="aspect-[4/3] w-full bg-sand-100 object-contain p-4">
                        <span class="absolute inset-0 flex items-end justify-center bg-gradient-to-t from-ink/30 to-transparent p-5 opacity-0 transition-opacity group-hover:opacity-100">
                            <span class="eyebrow rounded-full bg-sand-50/90 px-4 py-2 text-[0.6rem] text-ink">Ampliar plano</span>
                        </span>
                    </div>
                    <p class="eyebrow py-4 text-[0.65rem] text-ink">Ver plano {{ $p['n'] }}</p>
                </button>
            @endforeach
        </div>
    </div>

    {{-- Lightbox --}}
    <div x-show="open" x-cloak x-transition.opacity
        class="fixed inset-0 z-[90] flex items-center justify-center bg-ocean-950/90 p-4 lg:p-10"
        @click="open = false">
        <div class="relative max-h-full max-w-5xl" @click.stop>
            <button @click="open = false" aria-label="Cerrar"
                class="absolute -top-4 -right-4 flex h-10 w-10 items-center justify-center rounded-full bg-sand-50 text-ink shadow-lg">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
            <img :src="src" :alt="title" class="max-h-[85vh] w-auto rounded-xl bg-white object-contain shadow-2xl">
        </div>
    </div>
</section>
