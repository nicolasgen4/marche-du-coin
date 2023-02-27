<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['vente']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['vente']); ?>
<?php foreach (array_filter((['vente']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<section class="item column-btw-center">
    <img src="images/<?php echo e($vente->image); ?>" alt="<?php echo e($vente->titre); ?>">
    <h2><?php echo e($vente->titre); ?></h2>
    <section>
        <h3><?php echo e($vente->debut_vente); ?></h3>
        <h4><?php echo e($vente->localisation); ?></h4>
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
        <p><?php echo e(mb_strimwidth(ucfirst($vente->description), 0, 160, '...')); ?></p>
    </section>
    <a href="/ventes/<?php echo e($vente->id); ?>">Découvrir</a>
</section><?php /**PATH C:\xampp\htdocs\marche_du_coin\resources\views/components/vente-carte.blade.php ENDPATH**/ ?>