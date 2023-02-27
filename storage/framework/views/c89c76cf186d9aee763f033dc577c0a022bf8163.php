<h1><?php echo e($heading); ?></h1>


<?php if (! (count($listings) == 0)): ?>

<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="/listings/<?php echo e($listing['id']); ?>">
    <h2><?php echo e($listing['title']); ?></h2>
</a>
<p><?php echo e($listing['description']); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<p>Aucune offre disponible</p>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\benevolat\resources\views/listings.blade.php ENDPATH**/ ?>