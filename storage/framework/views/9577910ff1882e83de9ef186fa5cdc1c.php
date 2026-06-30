
<section id="consulta" class="relative z-10 bg-sand-50 px-6 lg:px-10">
    <div class="mx-auto -mt-16 max-w-5xl">
        <div class="reveal rounded-3xl bg-white p-8 shadow-2xl shadow-ink/10 ring-1 ring-ink/5 lg:p-12">
            <div class="grid gap-8 lg:grid-cols-12 lg:items-center">
                <div class="lg:col-span-5">
                    <p class="eyebrow text-gold-500">Disponibilidad</p>
                    <h2 class="display mt-4 text-3xl font-light text-ink lg:text-4xl">Encuentra tu residencia en <span class="accent-italic">Riviera</span></h2>
                    <p class="mt-4 text-base leading-relaxed text-ink-soft">Consulta disponibilidad, precios, modelos y recorridos disponibles para Riviera Residencial Etapa II.</p>
                </div>
                <div class="lg:col-span-7">
                    <form name="consulta-rapida" method="POST" data-netlify="true" netlify-honeypot="bot-field" action="/gracias.html"
                        class="grid gap-4 sm:grid-cols-2">
                        <input type="hidden" name="form-name" value="consulta-rapida">
                        <p class="hidden"><label>No llenar: <input name="bot-field"></label></p>
                        <input type="text" name="nombre" placeholder="Nombre" required
                            class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm text-ink placeholder:text-ink-soft/50 focus:border-gold-400 focus:ring-gold-400">
                        <input type="tel" name="telefono" placeholder="Teléfono" required
                            class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm text-ink placeholder:text-ink-soft/50 focus:border-gold-400 focus:ring-gold-400">
                        <input type="email" name="email" placeholder="Email" required
                            class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm text-ink placeholder:text-ink-soft/50 focus:border-gold-400 focus:ring-gold-400 sm:col-span-2">
                        <select name="interes" required
                            class="rounded-xl border-ink/10 bg-sand-50 px-4 py-3 text-sm text-ink focus:border-gold-400 focus:ring-gold-400 sm:col-span-2">
                            <option value="" disabled selected>Interés…</option>
                            <option>Modelo Murano</option>
                            <option>Modelo Mazzorbo</option>
                            <option>Recibir disponibilidad</option>
                            <option>Agendar recorrido</option>
                        </select>
                        <button type="submit" class="eyebrow rounded-full bg-gold-500 px-6 py-3.5 text-[0.65rem] text-sand-50 transition-colors hover:bg-gold-400 sm:col-span-2">Recibir información</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/consulta.blade.php ENDPATH**/ ?>