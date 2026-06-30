
<section class="grain relative flex min-h-svh items-end overflow-hidden bg-ocean-950">
    
    <div class="absolute inset-0">
        <img
            src="<?php echo e(asset('images/hero-cande.jpg')); ?>"
            alt="Casa Candé en Real del Mar"
            class="h-full w-full object-cover object-bottom lg:object-[center_60%]"
            fetchpriority="high"
        >
        
        <div class="absolute inset-0 bg-gradient-to-t from-ocean-950/70 via-transparent to-ocean-950/20"></div>
    </div>

    
    <div class="relative mx-auto w-full max-w-7xl px-6 pb-28 text-center lg:px-10 lg:pb-16 lg:text-left">
        <div class="reveal-group is-revealed mx-auto max-w-3xl lg:mx-0">
            <p class="eyebrow text-terra-300 drop-shadow-[0_2px_24px_rgba(10,26,38,0.55)]"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Exclusividad <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Exclusivity <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
            <h1 class="display mt-5 text-4xl font-light text-sand-50 drop-shadow-[0_2px_24px_rgba(10,26,38,0.55)] sm:text-5xl lg:text-6xl">
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
                     <?php $__env->slot('es', null, []); ?> Sólo 37 residencias y <em>54 departamentos</em> <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Only 37 homes and <em>54 apartments</em> <?php $__env->endSlot(); ?>
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
            </h1>
        </div>
    </div>

    
    <a href="#esencia"
       class="absolute bottom-8 left-1/2 z-10 -translate-x-1/2"
       aria-label="Bajar">
        <svg class="h-6 w-6 animate-bounce text-sand-100/80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </a>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/partials/hero.blade.php ENDPATH**/ ?>