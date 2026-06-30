{{-- ============================== MODELOS DISPONIBLES ============================== --}}
@php
    $modelos = [
        [
            'nombre' => 'Murano',
            'img' => 'riviera-murano.jpg',
            'specs' => ['168 m² construcción', '180 m² terreno', '3 recámaras', '2.5 baños', 'Walk-in closet principal', 'Jardín · Terraza', 'Espacio para 2 autos', 'Roof garden'],
            'texto' => 'Murano es una residencia ideal para quienes buscan amplitud, distribución familiar y espacios para disfrutar al aire libre dentro de Real del Mar.',
        ],
        [
            'nombre' => 'Mazzorbo',
            'img' => 'riviera-mazzorbo.jpg',
            'specs' => ['158.5 m² construcción', '153 m² terreno', '3 recámaras', '3 baños', 'Walk-in closet principal', 'Jardín · Terraza', 'Espacio para 2 autos', 'Roof garden'],
            'texto' => 'Mazzorbo es una residencia funcional y versátil, pensada para quienes buscan comodidad, diseño y una distribución completa en un formato más eficiente.',
        ],
    ];
@endphp

<section id="modelos" class="bg-sand-100 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-500">Modelos disponibles</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Dos residencias para diferentes <span class="accent-italic">estilos de vida</span></h2>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">
            @foreach ($modelos as $m)
                <article class="reveal group overflow-hidden rounded-3xl bg-white shadow-lg shadow-ink/5 ring-1 ring-ink/5">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/' . $m['img']) }}" alt="Modelo {{ $m['nombre'] }} — Riviera Residencial" loading="lazy"
                            class="aspect-[16/10] w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                        <span class="absolute left-5 top-5 rounded-full bg-ocean-950/70 px-4 py-1.5 text-xs font-medium text-sand-50 backdrop-blur-sm">Modelo {{ $m['nombre'] }}</span>
                    </div>
                    <div class="p-8">
                        <h3 class="display text-3xl font-light text-ink">{{ $m['nombre'] }}</h3>
                        <ul class="mt-5 grid grid-cols-2 gap-x-6 gap-y-2.5">
                            @foreach ($m['specs'] as $spec)
                                <li class="flex items-start gap-2 text-sm text-ink-soft">
                                    <svg class="mt-1 h-3.5 w-3.5 shrink-0 text-gold-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.3 3.3 6.8-6.8a1 1 0 0 1 1.4 0z" clip-rule="evenodd"/></svg>
                                    <span>{{ $spec }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-6 text-sm leading-relaxed text-ink-soft">{{ $m['texto'] }}</p>
                        <a href="#contacto" class="eyebrow mt-7 inline-flex items-center justify-center rounded-full bg-ink px-6 py-3 text-[0.65rem] text-sand-50 transition-colors hover:bg-gold-500">Ver Modelo {{ $m['nombre'] }}</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
