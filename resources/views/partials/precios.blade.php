{{-- ============================== PRECIOS DE PREVENTA ============================== --}}
<section id="precios" class="bg-ocean-950 py-24 text-sand-50 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-300">Precios de preventa</p>
            <h2 class="display mt-5 text-4xl font-light sm:text-5xl">Consulta disponibilidad actualizada por <span class="accent-italic">modelo</span></h2>
        </div>

        <div class="mt-14 grid gap-8 md:grid-cols-2">
            @foreach ([
                ['n' => 'Murano', 'a' => 6.7, 'b' => 7.2, 'u' => 'MDP'],
                ['n' => 'Mazzorbo', 'a' => 6.2, 'b' => 6.4, 'u' => 'MDP'],
            ] as $card)
                <div class="reveal rounded-3xl border border-sand-50/15 bg-sand-50/[0.04] p-10 text-center backdrop-blur-sm">
                    <p class="eyebrow text-[0.6rem] text-gold-300">Modelo {{ $card['n'] }}</p>
                    <p class="mt-5 text-sm text-sand-200/60">Desde</p>
                    <p class="display mt-1 text-5xl font-light tabular-nums lg:text-6xl">$<span x-data="countUp({{ $card['a'] }})" x-text="display">{{ number_format($card['a'], 1) }}</span> <span class="text-gold-300">–</span> $<span x-data="countUp({{ $card['b'] }})" x-text="display">{{ number_format($card['b'], 1) }}</span></p>
                    <p class="eyebrow mt-2 text-[0.6rem] text-sand-200/60">{{ $card['u'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="reveal mt-8 text-center text-xs text-sand-200/45">Precios y disponibilidad sujetos a cambio sin previo aviso.</p>
        <div class="reveal mt-8 text-center">
            <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-gold-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-gold-400">Solicitar disponibilidad actualizada</a>
        </div>
    </div>
</section>
