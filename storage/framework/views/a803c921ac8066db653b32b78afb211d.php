

<?php $__env->startSection('title', 'Students'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Students</h1>
        <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">+ Add Student</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of birth</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($student->id); ?></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->phone); ?></td>
                        <td><?php echo e($student->date_of_birth->format('d M Y')); ?></td>
                        <td class="text-end">
                            <a href="<?php echo e(route('students.show', $student)); ?>" class="btn btn-sm btn-info">View</a>
                            <a href="<?php echo e(route('students.edit', $student)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this student?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="6" class="text-center text-muted">No students yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo e($students->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/trex/workshop1/fullstackdevelopmentproject/resources/views/students/index.blade.php ENDPATH**/ ?>