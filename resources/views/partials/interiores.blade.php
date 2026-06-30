{{-- ============================== INTERIORES / CASAS MUESTRA ============================== --}}
@php
    $interiores = [
        ['img' => 'riviera-int-sala2.jpg',    't' => 'Sala', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'riviera-int-comedor.jpg',  't' => 'Comedor y cocina', 'span' => ''],
        ['img' => 'riviera-int-escalera.jpg', 't' => 'Escaleras', 'span' => ''],
        ['img' => 'riviera-int-recamara.jpg', 't' => 'Recámara', 'span' => ''],
        ['img' => 'riviera-int-recamara2.jpg','t' => 'Recámara principal', 'span' => ''],
        ['img' => 'riviera-terraza.jpg',      't' => 'Roof garden', 'span' => 'lg:col-span-2'],
        ['img' => 'riviera-int-sala.jpg',     't' => 'Estancia con vista', 'span' => ''],
    ];
    $lb = collect($interiores)->map(fn ($e) => ['src' => asset('images/' . $e['img']), 't' => $e['t']])->values();
@endphp

<section id="interiores" class="bg-sand-100 py-24 lg:py-32"
    x-data="gallery(@js($lb))"
    @keydown.escape.window="open = false"
    @keydown.arrow-right.window="open && next()"
    @keydown.arrow-left.window="open && prev()">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-500">Casas muestra</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Conoce nuestras <span class="accent-italic">casas muestra</span></h2>
            <p class="mt-4 text-lg text-ink-soft">Interiores diseñados para inspirar tu próxima etapa.</p>
            <p class="mt-4 text-base leading-relaxed text-ink-soft">Explora los interiores de Riviera Residencial y descubre espacios amplios, cálidos y funcionales para la vida familiar.</p>
        </div>

        <div class="reveal mt-12 grid auto-rows-[220px] grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($interiores as $i)
                <button type="button" @click="show({{ $loop->index }})"
                    class="group relative overflow-hidden rounded-2xl bg-ocean-950 {{ $i['span'] }}">
                    <img src="{{ asset('images/' . $i['img']) }}" alt="{{ $i['t'] }} — casa muestra Riviera Residencial" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 text-[0.6rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100">{{ $i['t'] }}</span>
                </button>
            @endforeach
        </div>

        <div class="reveal mt-10">
            <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-gold-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-gold-400">Agendar visita a casa muestra</a>
        </div>
    </div>

    @include('partials.lightbox')
</section>
