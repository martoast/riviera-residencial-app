{{-- ============================== AMENIDADES DEL FRACCIONAMIENTO ============================== --}}
@php
    $amenidades = [
        ['t' => 'Casa Club', 'i' => 'M3 21V8l9-5 9 5v13h-6v-7H9v7H3z'],
        ['t' => 'Alberca', 'i' => 'M3 16c1.5 0 1.5 1.5 3 1.5S10.5 16 12 16s1.5 1.5 3 1.5 1.5-1.5 3-1.5M3 12c1.5 0 1.5 1.5 3 1.5S10.5 12 12 12s1.5 1.5 3 1.5S16.5 12 18 12'],
        ['t' => 'Áreas verdes', 'i' => 'M12 22V9m0 0a5 5 0 0 1 5-5 5 5 0 0 1-5 5zm0 0a5 5 0 0 0-5-5 5 5 0 0 0 5 5z'],
        ['t' => 'Vistas panorámicas', 'i' => 'M2 18l6-7 4 4 4-5 6 8M2 6h20'],
        ['t' => 'Espacios de convivencia', 'i' => 'M17 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm11 12v-2a4 4 0 0 0-3-3.87'],
    ];
@endphp

<section id="amenidades" class="bg-sand-100 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-500">En el fraccionamiento</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Amenidades dentro del <span class="accent-italic">fraccionamiento</span></h2>
        </div>

        <div class="reveal mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
            @foreach ($amenidades as $a)
                <div class="flex flex-col items-center rounded-2xl bg-white p-7 text-center shadow-sm shadow-ink/5 ring-1 ring-ink/5">
                    <span class="flex h-14 w-14 items-center justify-center rounded-full bg-olive-500/10 text-olive-700">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $a['i'] }}"/></svg>
                    </span>
                    <p class="mt-4 text-sm font-medium text-ink">{{ $a['t'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
