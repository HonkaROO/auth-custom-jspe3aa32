<?php $__env->startSection('page-title','Main Landing Page'); ?>

<?php $__env->startSection('page-content'); ?>

<h1>Welcome to the Site</h1>
<br>


<form action="<?php echo e(route('logout')); ?>">

    <?php echo csrf_field(); ?>
    <button type="submit">
            Logout
    </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gumanit-laravel\auth-custom-jspe3aa32\resources\views/homepage.blade.php ENDPATH**/ ?>