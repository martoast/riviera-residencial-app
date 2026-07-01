{{-- ============================== ASESORÍA PERSONALIZADA (3 pasos) ============================== --}}
<section id="contacto" class="bg-beige py-24 lg:py-32">
    <div class="mx-auto max-w-3xl px-6 lg:px-10">
        <div class="reveal-group text-center">
            <p class="eyebrow text-gold-500">Contacto</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Agenda una asesoría <span class="accent-italic">personalizada</span></h2>
            <p class="mx-auto mt-5 max-w-xl text-lg leading-relaxed text-ink-soft">Conoce modelos, precios, disponibilidad y agenda un recorrido por Riviera Residencial.</p>
        </div>

        <div class="reveal mt-12 rounded-3xl bg-white p-8 shadow-xl shadow-ink/10 ring-1 ring-ink/5 lg:p-12"
            x-data="{ step: 1 }">
            {{-- Progress --}}
            <div class="mb-9 flex items-center justify-center gap-3">
                @for ($s = 1; $s <= 3; $s++)
                    <template x-if="{{ $s }} > 1"><span class="h-px w-8" :class="step >= {{ $s }} ? 'bg-gold-500' : 'bg-ink/15'"></span></template>
                    <span class="flex h-8 w-8 items-center justify-center rounded-full text-xs font-semibold transition-colors"
                        :class="step >= {{ $s }} ? 'bg-gold-500 text-sand-50' : 'bg-ink/10 text-ink-soft'">{{ $s }}</span>
                @endfor
            </div>

            <form name="asesoria" method="POST" data-netlify="true" netlify-honeypot="bot-field" action="/gracias.html">
                <input type="hidden" name="form-name" value="asesoria">
                <p class="hidden"><label>No llenar: <input name="bot-field"></label></p>

                {{-- Step 1 --}}
                <div x-show="step === 1" class="space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2">
                        <input type="text" name="nombre" placeholder="Nombre" required class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                        <input type="text" name="apellido" placeholder="Apellido" required class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                        <input type="email" name="email" placeholder="Email" required class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                        <input type="tel" name="telefono" placeholder="Teléfono" required class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" @click="step = 2" class="eyebrow rounded-full bg-ink px-7 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-gold-500">Continuar</button>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div x-show="step === 2" x-cloak class="space-y-3">
                    <p class="eyebrow mb-2 text-[0.6rem] text-ink-soft">¿Qué te interesa?</p>
                    @foreach ([
                        'Quiero información de crédito directo',
                        'Quiero agendar una visita',
                        'Soy broker',
                    ] as $op)
                        <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-ink/10 bg-sand-50 px-4 py-3 text-sm text-ink transition-colors hover:border-gold-400 has-[:checked]:border-gold-500 has-[:checked]:bg-gold-300/15">
                            <input type="checkbox" name="interes[]" value="{{ $op }}" class="rounded border-ink/30 text-gold-500 focus:ring-gold-400">
                            <span>{{ $op }}</span>
                        </label>
                    @endforeach
                    <div class="flex justify-between pt-2">
                        <button type="button" @click="step = 1" class="eyebrow rounded-full border border-ink/20 px-7 py-3.5 text-[0.65rem] text-ink transition-colors hover:bg-ink/5">Atrás</button>
                        <button type="button" @click="step = 3" class="eyebrow rounded-full bg-ink px-7 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-gold-500">Continuar</button>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div x-show="step === 3" x-cloak class="space-y-4">
                    <textarea name="mensaje" rows="3" placeholder="Mensaje (opcional)" class="w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400"></textarea>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span class="eyebrow text-[0.55rem] text-ink-soft">Fecha preferida</span>
                            <input type="date" name="fecha_visita" class="mt-1.5 w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                        </label>
                        <label class="block">
                            <span class="eyebrow text-[0.55rem] text-ink-soft">Horario preferido</span>
                            <input type="time" name="horario" class="mt-1.5 w-full rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm focus:border-gold-400 focus:ring-gold-400">
                        </label>
                    </div>
                    <label class="flex items-start gap-3 text-xs leading-relaxed text-ink-soft">
                        <input type="checkbox" name="acepto" value="si" required class="mt-0.5 rounded border-ink/30 text-gold-500 focus:ring-gold-400">
                        <span>Acepto ser contactado por el equipo comercial de Riviera Residencial vía llamada, mensaje o correo electrónico. Mi información será tratada con privacidad.</span>
                    </label>
                    <div class="flex justify-between pt-2">
                        <button type="button" @click="step = 2" class="eyebrow rounded-full border border-ink/20 px-7 py-3.5 text-[0.65rem] text-ink transition-colors hover:bg-ink/5">Atrás</button>
                        <button type="submit" class="eyebrow rounded-full bg-gold-500 px-8 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-gold-400">Enviar solicitud</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
