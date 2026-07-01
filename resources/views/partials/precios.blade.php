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

        {{-- Financiamiento disponible (MX / USA) --}}
        <div class="reveal mx-auto mt-12 flex max-w-md flex-col items-center rounded-2xl border border-gold-300/25 bg-sand-50/[0.04] px-8 py-7 text-center backdrop-blur-sm">
            <span class="flex h-12 w-12 items-center justify-center rounded-full border border-gold-300/40 text-gold-300">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
                    <circle cx="15.5" cy="7" r="3.6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.5 5.4v3.2M14.4 6.1c0-.5.5-.8 1.1-.8s1.1.3 1.1.8-.5.7-1.1.8-1.1.3-1.1.8.5.8 1.1.8 1.1-.3 1.1-.8"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 15.5c1.4-.9 2.9-.9 4.3 0l1.8 1.1c.5.3 1 .4 1.6.3l5.2-1c1-.2 1.7-1.1 1.4-2.1-.2-.7-.8-1.1-1.5-1.1h-4.4"/>
                </svg>
            </span>
            <p class="eyebrow mt-4 text-[0.7rem] text-sand-50">Financiamiento disponible</p>
            <p class="mt-2 text-sm leading-relaxed text-sand-200/70">Para compradores de México y Estados Unidos.</p>
            <div class="mt-5 flex items-center gap-5">
                {{-- México --}}
                <span class="flex items-center gap-2 text-[0.7rem] font-medium text-sand-100/85">
                    <svg class="h-5 w-auto rounded-[3px] ring-1 ring-sand-50/15" viewBox="0 0 30 20">
                        <rect width="10" height="20" x="0" fill="#006847"/>
                        <rect width="10" height="20" x="10" fill="#ffffff"/>
                        <rect width="10" height="20" x="20" fill="#CE1126"/>
                        <circle cx="15" cy="10" r="2.1" fill="none" stroke="#9b7b3a" stroke-width="0.8"/>
                    </svg>
                    México
                </span>
                <span class="h-6 w-px bg-sand-50/20"></span>
                {{-- Estados Unidos --}}
                <span class="flex items-center gap-2 text-[0.7rem] font-medium text-sand-100/85">
                    <svg class="h-5 w-auto rounded-[3px] ring-1 ring-sand-50/15" viewBox="0 0 30 20">
                        <rect width="30" height="20" fill="#ffffff"/>
                        @foreach ([0,2,4,6,8,10,12] as $s)
                            <rect width="30" height="1.539" y="{{ $s * 1.539 }}" fill="#B22234"/>
                        @endforeach
                        <rect width="12" height="10.77" fill="#3C3B6E"/>
                        @foreach ([2,5,8] as $cx)
                            @foreach ([2,5,8] as $cy)
                                <circle cx="{{ $cx }}" cy="{{ $cy }}" r="0.6" fill="#ffffff"/>
                            @endforeach
                        @endforeach
                    </svg>
                    Estados Unidos
                </span>
            </div>
        </div>

        <p class="reveal mt-8 text-center text-xs text-sand-200/45">Precios y disponibilidad sujetos a cambio sin previo aviso.</p>
        <div class="reveal mt-8 text-center">
            <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-gold-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-gold-400">Solicitar disponibilidad actualizada</a>
        </div>
    </div>
</section>
