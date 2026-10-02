

<?php $__env->startSection('title', 'Add Student'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="h3 mb-3">Add Student</h1>

    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo $__env->make('students._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/trex/workshop1/fullstackdevelopmentproject/resources/views/students/create.blade.php ENDPATH**/ ?>