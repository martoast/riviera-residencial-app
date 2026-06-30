
<section id="respaldo" class="bg-beige py-24 lg:py-32">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-10">
        <div class="reveal-group">
            <p class="eyebrow text-gold-500">Respaldo institucional</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Más de <span class="accent-italic">65 años</span> construyendo México</h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-ink-soft">
                Riviera Residencial cuenta con el respaldo de Grupo HIR, una empresa con más de seis décadas de experiencia desarrollando patrimonio para familias mexicanas.
            </p>
        </div>

        
        <div class="reveal mt-12 flex flex-wrap items-center justify-center gap-x-12 gap-y-4">
            <span class="display text-2xl text-ink/70">HIR Baja</span>
            <span class="h-6 w-px bg-ink/15"></span>
            <span class="display text-2xl text-ink/70">Grupo HIR</span>
            <span class="h-6 w-px bg-ink/15"></span>
            <span class="display text-2xl text-ink/70">BCapital Brokers</span>
        </div>

        
        <div class="reveal mt-16 grid gap-px overflow-hidden rounded-3xl bg-ink/10 text-left sm:grid-cols-2 lg:grid-cols-5">
            <?php $__currentLoopData = [
                ['d' => "1960's", 't' => 'Inicio en comercialización de lotes'],
                ['d' => "1990's", 't' => 'HIR Casa · Hipotecaria Nacional · HIR Seguros'],
                ['d' => "2000's", 't' => 'HIR PYME · HIR Expo · Residencial WTC'],
                ['d' => "2010's", 't' => 'Pepsi Center · BIM Banco Inmobiliario'],
                ['d' => "2020's", 't' => 'HIR XLab · Preflex · HIR CASA-BMV'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $era): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-sand-50 p-6">
                    <p class="display text-2xl text-gold-500"><?php echo e($era['d']); ?></p>
                    <p class="mt-2 text-sm leading-relaxed text-ink-soft"><?php echo e($era['t']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/respaldo.blade.php ENDPATH**/ ?>