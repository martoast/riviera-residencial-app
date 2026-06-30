
<?php
    $interiores = [
        ['img' => 'riviera-int-sala2.jpg',    't' => 'Sala', 'span' => 'lg:col-span-2 lg:row-span-2'],
        ['img' => 'riviera-int-comedor.jpg',  't' => 'Comedor y cocina', 'span' => ''],
        ['img' => 'riviera-int-escalera.jpg', 't' => 'Escaleras', 'span' => ''],
        ['img' => 'riviera-int-recamara.jpg', 't' => 'Recámara', 'span' => ''],
        ['img' => 'riviera-int-recamara2.jpg','t' => 'Recámara principal', 'span' => ''],
        ['img' => 'riviera-terraza.jpg',      't' => 'Roof garden', 'span' => 'lg:col-span-2'],
        ['img' => 'riviera-int-sala.jpg',     't' => 'Estancia con vista', 'span' => ''],
    ];
?>

<section id="interiores" class="bg-sand-100 py-24 lg:py-32"
    x-data="{ open: false, src: '', title: '' }" @keydown.escape.window="open = false">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-gold-500">Casas muestra</p>
            <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Conoce nuestras <span class="accent-italic">casas muestra</span></h2>
            <p class="mt-4 text-lg text-ink-soft">Interiores diseñados para inspirar tu próxima etapa.</p>
            <p class="mt-4 text-base leading-relaxed text-ink-soft">Explora los interiores de Riviera Residencial y descubre espacios amplios, cálidos y funcionales para la vida familiar.</p>
        </div>

        <div class="reveal mt-12 grid auto-rows-[220px] grid-cols-2 gap-4 lg:grid-cols-4">
            <?php $__currentLoopData = $interiores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button" @click="open = true; src = '<?php echo e(asset('images/' . $i['img'])); ?>'; title = '<?php echo e($i['t']); ?>'"
                    class="group relative overflow-hidden rounded-2xl bg-ocean-950 <?php echo e($i['span']); ?>">
                    <img src="<?php echo e(asset('images/' . $i['img'])); ?>" alt="<?php echo e($i['t']); ?> — casa muestra Riviera Residencial" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-[1.2s] ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/60 via-transparent to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>
                    <span class="eyebrow absolute bottom-4 left-4 text-[0.6rem] text-sand-50 opacity-0 transition-opacity group-hover:opacity-100"><?php echo e($i['t']); ?></span>
                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="reveal mt-10">
            <a href="#contacto" class="eyebrow inline-flex items-center justify-center rounded-full bg-gold-500 px-8 py-4 text-[0.7rem] text-sand-50 transition-colors hover:bg-gold-400">Agendar visita a casa muestra</a>
        </div>
    </div>

    
    <div x-show="open" x-cloak x-transition.opacity
        class="fixed inset-0 z-[90] flex items-center justify-center bg-ocean-950/90 p-4 lg:p-10" @click="open = false">
        <div class="relative max-h-full max-w-5xl" @click.stop>
            <button @click="open = false" aria-label="Cerrar"
                class="absolute -top-4 -right-4 flex h-10 w-10 items-center justify-center rounded-full bg-sand-50 text-ink shadow-lg">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
            <img :src="src" :alt="title" class="max-h-[85vh] w-auto rounded-xl object-contain shadow-2xl">
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/interiores.blade.php ENDPATH**/ ?>