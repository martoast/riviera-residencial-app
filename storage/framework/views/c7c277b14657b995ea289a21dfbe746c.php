
<section id="proyecto" class="bg-sand-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
            
            <div class="reveal-group">
                <p class="eyebrow text-gold-500">Conoce Riviera Residencial</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">Una comunidad privada dentro de <span class="accent-italic">Real del Mar</span></h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">
                    Riviera Residencial Etapa II es un desarrollo de 46 casas dentro de Real del Mar, con dos modelos disponibles a elegir: Murano y Mazzorbo. Un proyecto pensado para quienes buscan vivir en una comunidad residencial con vistas, seguridad, amenidades y conexión estratégica entre Tijuana y Rosarito.
                </p>

                <dl class="mt-10 grid grid-cols-2 gap-x-6 gap-y-5 sm:grid-cols-4">
                    <?php $__currentLoopData = [
                        ['n' => '46', 'l' => 'Casas'],
                        ['n' => '2', 'l' => 'Modelos'],
                        ['n' => '38', 'l' => 'Murano'],
                        ['n' => '8', 'l' => 'Mazzorbo'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <dt class="display text-4xl font-light text-ink"><?php echo e($stat['n']); ?></dt>
                            <dd class="eyebrow mt-1 text-[0.55rem] text-ink-soft"><?php echo e($stat['l']); ?></dd>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </dl>

                <ul class="mt-8 flex flex-wrap gap-2.5">
                    <?php $__currentLoopData = ['Dentro de Real del Mar', 'Casa Club', 'Alberca', 'Vistas panorámicas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="rounded-full bg-olive-500/10 px-4 py-2 text-xs font-medium text-olive-700"><?php echo e($tag); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            
            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10">
                <img src="<?php echo e(asset('images/riviera-acceso.jpg')); ?>" alt="Acceso a Riviera Residencial II en Real del Mar" loading="lazy"
                    class="aspect-[4/3] w-full object-cover">
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/proyecto.blade.php ENDPATH**/ ?>