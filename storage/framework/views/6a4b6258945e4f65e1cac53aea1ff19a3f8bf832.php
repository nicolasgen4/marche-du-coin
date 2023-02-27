

<?php $__env->startSection('content'); ?>
<section>
    <h2><?php echo e(htmlspecialchars($offre->titre)); ?></h2>
    <p><?php echo e(htmlspecialchars($offre->description)); ?></p>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\benevolat\resources\views/offre.blade.php ENDPATH**/ ?>