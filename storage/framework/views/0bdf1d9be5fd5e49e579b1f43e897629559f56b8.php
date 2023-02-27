<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['etiquettesSpv']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['etiquettesSpv']); ?>
<?php foreach (array_filter((['etiquettesSpv']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$etiquettes = explode(',', $etiquettesSpv);
?>

<ul>
    <?php $__currentLoopData = $etiquettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etiquette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="/?tag=<?php echo e($etiquette); ?>"><?php echo e($etiquette); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\xampp\htdocs\marche_du_coin\resources\views/components/vente-etiquettes.blade.php ENDPATH**/ ?>