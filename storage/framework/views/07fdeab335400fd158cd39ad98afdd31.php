
<section id="precios" class="bg-ocean-950 py-24 text-sand-50 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-300">Precios de preventa</p>
            <h2 class="display mt-5 text-4xl font-light sm:text-5xl">Consulta disponibilidad actualizada por <span class="accent-italic">modelo</span></h2>
        </div>

        <div class="mt-14 grid gap-8 md:grid-cols-2">
            <?php $__currentLoopData = [
                ['n' => 'Murano', 'p' => '$6.7 – $7.2', 'u' => 'MDP'],
                ['n' => 'Mazzorbo', 'p' => '$6.2 – $6.4', 'u' => 'MDP'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="reveal rounded-3xl border border-sand-50/15 bg-sand-50/[0.04] p-10 text-center backdrop-blur-sm">
                    <p class="eyebrow text-[0.6rem] text-gold-300">Modelo <?php echo e($card['n']); ?></p>
                    <p class="mt-5 text-sm text-sand-200/60">Desde</p>
                    <p class="display mt-1 text-5xl font-light lg:text-6xl"><?php echo e($card['p']); ?></p>
                    <p class="eyebrow mt-2 text-[0.6rem] text-sand-200/60"><?php echo e($card['u']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <p class="reveal mt-8 text-center text-xs text-sand-200/45">Precios y disponibilidad sujetos a cambio sin previo aviso.</p>
        <div class="reveal mt-8 text-center">
            <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-gold-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-gold-400">Solicitar disponibilidad actualizada</a>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/precios.blade.php ENDPATH**/ ?>