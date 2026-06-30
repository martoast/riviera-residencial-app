<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.consulta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.proyecto', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.respaldo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.aspiracional', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.modelos', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.precios', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.planos', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.casa-club', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.amenidades', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.zona', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('partials.banda', [
        'id' => 'golf',
        'img' => 'riviera-golf.jpg',
        'side' => 'left',
        'eyebrow' => 'Golf',
        'titulo' => 'Un recorrido entre <em>naturaleza y golf</em>',
        'texto' => 'Vive la experiencia de un campo de golf de 18 hoyos rodeado de naturaleza y vistas al océano. Un entorno pensado para disfrutar cada recorrido.',
        'cta' => ['label' => 'Conocer Real del Mar', 'href' => '#zona'],
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.banda', [
        'id' => 'padel',
        'img' => 'riviera-padel.jpg',
        'side' => 'right',
        'eyebrow' => 'Pádel',
        'titulo' => 'Entre juegos y <em>momentos</em>',
        'texto' => 'Canchas de pádel rodeadas de paisajes naturales y un ambiente pensado para compartir, relajarse y disfrutar el día a otro ritmo.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.banda', [
        'id' => 'alberca-mar',
        'img' => 'riviera-alberca-mar.jpg',
        'side' => 'left',
        'eyebrow' => 'Alberca',
        'titulo' => 'Alberca con <em>vista al mar</em>',
        'texto' => 'La alberca se encuentra dentro del hotel ubicado en Real del Mar, ideal para disfrutar del clima y relajarse frente al horizonte costero.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.banda', [
        'id' => 'naturaleza',
        'img' => 'riviera-naturaleza.jpg',
        'side' => 'right',
        'eyebrow' => 'Naturaleza',
        'titulo' => 'Senderos rodeados de <em>naturaleza</em>',
        'texto' => 'Espacios pensados para disfrutar cada recorrido, desconectarte y aprovechar momentos al aire libre.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.banda', [
        'id' => 'hipico',
        'img' => 'riviera-hipico.jpg',
        'side' => 'left',
        'eyebrow' => 'Club Hípico',
        'titulo' => 'Club Hípico en <em>Real del Mar</em>',
        'texto' => 'Actividades ecuestres dentro de Real del Mar, en un entorno pensado para disfrutar al aire libre y compartir nuevos momentos.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.ubicacion', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.interiores', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.exteriores', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.asesoria', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.brokers', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.cta-final', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/alex/Documents/ricardo/riviera-residencial/app/resources/views/home.blade.php ENDPATH**/ ?>