{{-- ============================== RESPALDO INSTITUCIONAL ============================== --}}
<section id="respaldo" class="bg-beige py-24 lg:py-32">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-10">
        <div class="reveal-group">
            <p class="eyebrow text-gold-500">Respaldo institucional</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Más de <span class="accent-italic">65 años</span> construyendo México</h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-ink-soft">
                Riviera Residencial cuenta con el respaldo de Grupo HIR, una empresa con más de seis décadas de experiencia desarrollando patrimonio para familias mexicanas.
            </p>
        </div>

        {{-- Backers --}}
        <div class="reveal mt-12 flex flex-col items-center justify-center gap-8 sm:flex-row sm:gap-14">
            <img src="{{ asset('images/hir-baja-dark.png') }}" alt="HIR Baja" class="h-20 w-auto sm:h-24">
            <span class="hidden h-14 w-px bg-ink/15 sm:block"></span>
            <img src="{{ asset('images/bcapital-dark.png') }}" alt="BCapital Brokers" class="h-12 w-auto sm:h-14">
        </div>

        @php
            $eras = [
                ['d' => "1960's", 't' => 'Inicio en comercialización de lotes'],
                ['d' => "1990's", 't' => 'HIR Casa · Hipotecaria Nacional · HIR Seguros'],
                ['d' => "2000's", 't' => 'HIR PYME · HIR Expo · Residencial WTC'],
                ['d' => "2010's", 't' => 'Pepsi Center · BIM Banco Inmobiliario'],
                ['d' => "2020's", 't' => 'HIR XLab · Preflex · HIR CASA-BMV'],
            ];
        @endphp

        {{-- Timeline — compact list on mobile --}}
        <div class="reveal mt-10 space-y-4 text-left sm:hidden">
            @foreach ($eras as $era)
                <div class="border-l-2 border-gold-500/40 pl-4">
                    <p class="display text-lg leading-none text-gold-500">{{ $era['d'] }}</p>
                    <p class="mt-1.5 text-sm leading-snug text-ink-soft">{{ $era['t'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Timeline — card grid on tablet/desktop --}}
        <div class="reveal mt-16 hidden gap-px overflow-hidden rounded-3xl bg-ink/10 text-left sm:grid sm:grid-cols-2 lg:grid-cols-5">
            @foreach ($eras as $era)
                <div class="bg-sand-50 p-6">
                    <p class="display text-2xl text-gold-500">{{ $era['d'] }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-ink-soft">{{ $era['t'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
