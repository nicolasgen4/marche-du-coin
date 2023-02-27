

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section>
    <img src="<?php echo e(asset('images')); ?>/<?php echo e($vente->image); ?>" alt="<?php echo e($vente->titre); ?>">
    <h2><?php echo e($vente->titre); ?></h2>
    <section>
        <h3><?php echo e($vente->vendeur); ?></h3>
        <address><?php echo e($vente->localisation); ?></address>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.vente-etiquettes','data' => ['etiquettesSpv' => $vente->etiquettes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('vente-etiquettes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['etiquettesSpv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vente->etiquettes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </section>
    <section>
        <h4>Du <?php echo e($vente->debut_vente); ?> à <?php echo e($vente->fin_vente); ?></h4>
        <p><?php echo e($vente->description); ?></p>
    </section>
    <section>
        <h5>Contacts</h5>
        <ul>
            <li><?php echo e($vente->telephone); ?></li>
            <li><?php echo e($vente->email); ?></li>
            <li><?php echo e($vente->site_web); ?></li>
        </ul>
    </section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marche_du_coin\resources\views/vente.blade.php ENDPATH**/ ?>