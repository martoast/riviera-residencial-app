
<?php
    $lots = json_decode(file_get_contents(resource_path('data/lots.json')), true) ?: [];
    $avail = collect($lots)->where('status', 'available')->count();
    $sold = collect($lots)->where('status', 'sold')->count();

    $apts = json_decode(file_get_contents(resource_path('data/apartments.json')), true) ?: [];
    $aAvail = collect($apts)->where('status', 'available')->count();
    $aSold = collect($apts)->where('status', 'sold')->count();
?>

<section id="disponibilidad" class="bg-ocean-950 py-24 lg:py-32"
    x-data="{
        filter: 'all',
        active: null,
        shown(s) { return this.filter === 'all' || this.filter === s; },
        pick(l) { this.active = l; },
    }">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Disponibilidad <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Availability <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
            <h2 class="display mt-6 text-4xl font-light text-sand-50 sm:text-5xl">
                <span x-show="$store.product.tab === 'casas'">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Encuentra tu casa <em>en el plano</em> <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Find your home <em>on the plan</em> <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </span>
                <span x-show="$store.product.tab === 'depas'">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Encuentra tu departamento <em>en las torres</em> <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Find your apartment <em>in the towers</em> <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </span>
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-sand-100/70">
                <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('es', null, []); ?> Pasa el cursor o toca cada unidad para ver su estado y superficie. <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Hover or tap any unit to see its status and area. <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
            </p>
        </div>

        
        <div class="reveal mt-8 flex justify-center">
            <div class="inline-flex rounded-full border border-sand-50/15 bg-ocean-900/60 p-1.5">
                <button @click="$store.product.tab = 'casas'; active = null"
                    class="eyebrow whitespace-nowrap rounded-full px-3.5 py-2.5 text-[0.625rem]! tracking-[0.16em]! transition-all duration-300 sm:px-6 sm:py-2.5 sm:text-xs! sm:tracking-[0.22em]!"
                    :class="$store.product.tab === 'casas' ? 'bg-sand-50 text-ink' : 'text-sand-200/70 hover:text-sand-50'"
                >Casas Candé</button>
                <button @click="$store.product.tab = 'depas'; active = null"
                    class="eyebrow whitespace-nowrap rounded-full px-3.5 py-2.5 text-[0.625rem]! tracking-[0.16em]! transition-all duration-300 sm:px-6 sm:py-2.5 sm:text-xs! sm:tracking-[0.22em]!"
                    :class="$store.product.tab === 'depas' ? 'bg-sand-50 text-ink' : 'text-sand-200/70 hover:text-sand-50'"
                ><span class="lang-es">Departamentos</span><span class="lang-en">Apartments</span></button>
            </div>
        </div>

        
        <div x-show="$store.product.tab === 'casas'"
             x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

            
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <?php $__currentLoopData = [
                    ['k' => 'all', 'es' => 'Todas', 'en' => 'All', 'n' => count($lots)],
                    ['k' => 'available', 'es' => 'Disponibles', 'en' => 'Available', 'n' => $avail],
                    ['k' => 'sold', 'es' => 'Vendidas', 'en' => 'Sold', 'n' => $sold],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button @click="filter = '<?php echo e($chip['k']); ?>'"
                        class="eyebrow flex items-center gap-2 rounded-full border px-5 py-2.5 text-[0.6rem] transition-colors duration-300"
                        :class="filter === '<?php echo e($chip['k']); ?>' ? 'border-terra-400 bg-terra-400/15 text-sand-50' : 'border-sand-50/15 text-sand-200/70 hover:border-sand-50/40'">
                        <span class="lang-es"><?php echo e($chip['es']); ?></span><span class="lang-en"><?php echo e($chip['en']); ?></span>
                        <span class="text-sand-200/50"><?php echo e($chip['n']); ?></span>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-12 grid items-center gap-10 lg:grid-cols-5 lg:gap-12">
                
                <div class="lg:col-span-3">
                    <div class="relative mx-auto w-full max-w-xl">
                        
                        <img src="<?php echo e(asset('images/casas-plan.svg')); ?>" alt=""
                            class="pointer-events-none absolute inset-0 h-full w-full opacity-60 invert">
                        
                        <svg viewBox="0 0 892.4 866.64" class="plan-svg relative w-full" xmlns="http://www.w3.org/2000/svg">
                            <?php $__currentLoopData = $lots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <path d="<?php echo e($lot['d']); ?>"
                                    class="plan-lot plan-lot--<?php echo e($lot['status']); ?>"
                                    :class="{ 'is-dim': !shown('<?php echo e($lot['status']); ?>') }"
                                    @mouseenter="pick({ n: '<?php echo e($lot['n']); ?>', m2: <?php echo e($lot['m2'] ?? 'null'); ?>, status: '<?php echo e($lot['status']); ?>' })"
                                    @click="pick({ n: '<?php echo e($lot['n']); ?>', m2: <?php echo e($lot['m2'] ?? 'null'); ?>, status: '<?php echo e($lot['status']); ?>' })"
                                ></path>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </svg>
                    </div>
                </div>

                
                <div class="lg:col-span-2">
                    <div class="flex min-h-[19rem] flex-col justify-center rounded-2xl border border-sand-50/15 bg-ocean-900/60 p-8 backdrop-blur-sm lg:min-h-[22rem] lg:p-10">
                        <template x-if="!active">
                            <div class="py-6">
                                <p class="eyebrow text-[0.6rem] text-ocean-300">Casas Candé</p>
                                <p class="display mt-3 text-2xl font-light text-sand-50">
                                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Selecciona un lote para ver los detalles <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Select a lot to see the details <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                                </p>
                                <div class="mt-8 space-y-3 border-t border-sand-50/10 pt-6">
                                    <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-terra-400)"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Disponible <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Available <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                    <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-stone-warm)"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Vendida <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Sold <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                </div>
                            </div>
                        </template>
                        <template x-if="active">
                            <div class="py-2">
                                <div class="flex items-center justify-between">
                                    <p class="eyebrow text-[0.6rem] text-ocean-300">Casas Candé</p>
                                    <span class="eyebrow rounded-full px-3 py-1 text-[0.5rem]"
                                        :class="active && active.status === 'available' ? 'bg-terra-400/20 text-terra-300' : 'bg-sand-50/10 text-sand-200/60'">
                                        <span x-show="active && active.status === 'available'"><span class="lang-es">Disponible</span><span class="lang-en">Available</span></span>
                                        <span x-show="active && active.status === 'sold'"><span class="lang-es">Vendida</span><span class="lang-en">Sold</span></span>
                                    </span>
                                </div>
                                <p class="display mt-3 text-5xl font-light text-sand-50">
                                    <span class="lang-es">Casa</span><span class="lang-en">House</span> <span x-text="active && active.n"></span>
                                </p>
                                <div class="mt-6 border-t border-sand-50/10 pt-6" x-show="active && active.m2">
                                    <p class="display text-3xl font-light text-terra-300"><span x-text="active && active.m2"></span> m²</p>
                                    <p class="eyebrow mt-1 text-[0.55rem] text-sand-200/60"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> de terreno <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> of land <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                </div>
                                <a href="#contacto"
                                    class="eyebrow mt-8 inline-flex w-full items-center justify-center rounded-full px-6 py-4 text-[0.65rem] transition-all duration-300"
                                    :class="active && active.status === 'available' ? 'bg-terra-500 text-sand-50 hover:bg-terra-600' : 'border border-sand-50/20 text-sand-200/70 hover:border-sand-50/40'">
                                    <span x-show="active && active.status === 'available'"><span class="lang-es">Solicitar información</span><span class="lang-en">Request information</span></span>
                                    <span x-show="active && active.status !== 'available'"><span class="lang-es">Ver otras opciones</span><span class="lang-en">See other options</span></span>
                                </a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        
        <div x-show="$store.product.tab === 'depas'" x-cloak
             x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

            
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <?php $__currentLoopData = [
                    ['k' => 'all', 'es' => 'Todos', 'en' => 'All', 'n' => count($apts)],
                    ['k' => 'available', 'es' => 'Disponibles', 'en' => 'Available', 'n' => $aAvail],
                    ['k' => 'sold', 'es' => 'Vendidos', 'en' => 'Sold', 'n' => $aSold],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button @click="filter = '<?php echo e($chip['k']); ?>'"
                        class="eyebrow flex items-center gap-2 rounded-full border px-5 py-2.5 text-[0.6rem] transition-colors duration-300"
                        :class="filter === '<?php echo e($chip['k']); ?>' ? 'border-terra-400 bg-terra-400/15 text-sand-50' : 'border-sand-50/15 text-sand-200/70 hover:border-sand-50/40'">
                        <span class="lang-es"><?php echo e($chip['es']); ?></span><span class="lang-en"><?php echo e($chip['en']); ?></span>
                        <span class="text-sand-200/50"><?php echo e($chip['n']); ?></span>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-12 grid items-center gap-10 lg:grid-cols-5 lg:gap-12">
                
                <div class="lg:col-span-3">
                    <div class="relative mx-auto w-full max-w-2xl">
                        <img src="<?php echo e(asset('images/departamentos-plan.svg')); ?>" alt="Plano de elevación de las torres de Real del Mar"
                            class="pointer-events-none absolute inset-0 h-full w-full opacity-60 invert">
                        <svg viewBox="0 0 1580.7 800.6" class="relative w-full" xmlns="http://www.w3.org/2000/svg">
                            <?php $__currentLoopData = $apts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <path d="<?php echo e($apt['d']); ?>"
                                    class="plan-unit plan-unit--<?php echo e($apt['status']); ?>"
                                    :class="{ 'is-dim': !shown('<?php echo e($apt['status']); ?>') }"
                                    @mouseenter="pick({ n: '<?php echo e($apt['n']); ?>', m2: <?php echo e($apt['m2'] ?? 'null'); ?>, status: '<?php echo e($apt['status']); ?>' })"
                                    @click="pick({ n: '<?php echo e($apt['n']); ?>', m2: <?php echo e($apt['m2'] ?? 'null'); ?>, status: '<?php echo e($apt['status']); ?>' })"
                                ></path>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </svg>
                    </div>
                </div>

                
                <div class="lg:col-span-2">
                    <div class="flex min-h-[19rem] flex-col justify-center rounded-2xl border border-sand-50/15 bg-ocean-900/60 p-8 backdrop-blur-sm lg:min-h-[22rem] lg:p-10">
                        <template x-if="!active">
                            <div class="py-6">
                                <p class="eyebrow text-[0.6rem] text-ocean-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Departamentos · 3 torres <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Apartments · 3 towers <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                <p class="display mt-3 text-2xl font-light text-sand-50">
                                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Selecciona un departamento para ver los detalles <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Select an apartment to see the details <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                                </p>
                                <div class="mt-8 space-y-3 border-t border-sand-50/10 pt-6">
                                    <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-terra-400)"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Disponible <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Available <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                    <p class="flex items-center gap-3 text-sm text-sand-100/80"><span class="h-3 w-3 rounded-sm" style="background: var(--color-stone-warm)"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Vendido <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Sold <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                </div>
                            </div>
                        </template>
                        <template x-if="active">
                            <div class="py-2">
                                <div class="flex items-center justify-between">
                                    <p class="eyebrow text-[0.6rem] text-ocean-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Departamentos <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Apartments <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                                    <span class="eyebrow rounded-full px-3 py-1 text-[0.5rem]"
                                        :class="active && active.status === 'available' ? 'bg-terra-400/20 text-terra-300' : 'bg-sand-50/10 text-sand-200/60'">
                                        <span x-show="active && active.status === 'available'"><span class="lang-es">Disponible</span><span class="lang-en">Available</span></span>
                                        <span x-show="active && active.status === 'sold'"><span class="lang-es">Vendido</span><span class="lang-en">Sold</span></span>
                                    </span>
                                </div>
                                <p class="display mt-3 text-5xl font-light text-sand-50">
                                    <span class="lang-es">Depto.</span><span class="lang-en">Apt.</span> <span x-text="active && active.n"></span>
                                </p>
                                <div class="mt-6 border-t border-sand-50/10 pt-6" x-show="active && active.m2">
                                    <p class="display text-3xl font-light text-terra-300"><span x-text="active && active.m2"></span> m²</p>
                                </div>
                                <a href="#contacto"
                                    class="eyebrow mt-8 inline-flex w-full items-center justify-center rounded-full px-6 py-4 text-[0.65rem] transition-all duration-300"
                                    :class="active && active.status === 'available' ? 'bg-terra-500 text-sand-50 hover:bg-terra-600' : 'border border-sand-50/20 text-sand-200/70 hover:border-sand-50/40'">
                                    <span x-show="active && active.status === 'available'"><span class="lang-es">Solicitar información</span><span class="lang-en">Request information</span></span>
                                    <span x-show="active && active.status !== 'available'"><span class="lang-es">Ver otras opciones</span><span class="lang-en">See other options</span></span>
                                </a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/disponibilidad.blade.php ENDPATH**/ ?>