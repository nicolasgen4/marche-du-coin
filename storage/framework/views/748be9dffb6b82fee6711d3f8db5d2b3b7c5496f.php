

<?php $__env->startSection('content'); ?>
<section>
    <h2><?php echo e(htmlspecialchars($heading)); ?></h2>

    <?php if (! (count($offres) == 0)): ?>

    <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section>
        <img src="<?php echo e(asset('images/test.webp')); ?>" alt="<?php echo e(htmlspecialchars($offre->titre)); ?>">
        <a href="/offres/<?php echo e(htmlspecialchars($offre->id)); ?>">
            <h3><?php echo e(htmlspecialchars($offre->titre)); ?></h3>
        </a>
    </section>
    <section>
        <h4><?php echo e(htmlspecialchars($offre->association)); ?></h4>
        <address><?php echo e(htmlspecialchars($offre->localisation)); ?></address>
        <ul>
            <li><?php echo e(htmlspecialchars($offre->etiquette)); ?></li>
        </ul>
    </section>
    <p><?php echo e(htmlspecialchars($offre->description)); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
    <p>Aucune offre disponible</p>

    <?php endif; ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\benevolat\resources\views/offres.blade.php ENDPATH**/ ?>