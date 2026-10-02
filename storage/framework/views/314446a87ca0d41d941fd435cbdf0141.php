<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Training Institute'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('students.index')); ?>">Training Institute</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(route('students.index')); ?>">Students</a>
                <a class="nav-link" href="<?php echo e(route('courses.index')); ?>">Courses</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH /home/trex/workshop1/fullstackdevelopmentproject/resources/views/layouts/app.blade.php ENDPATH**/ ?>