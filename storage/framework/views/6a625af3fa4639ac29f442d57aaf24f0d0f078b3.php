 <!-- Extending layout\main -->

<?php $__env->startPush('head'); ?><!--we have created a stack and pushing this header information-->
<title>Todo List App</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-section'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> 
<!--flex-direction view with Margin 5-->
        <div class="h2">All Todos</div>
        <a href="<?php echo e(route("todo.create")); ?>" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
    <!-- <?php echo e(print_r($todos)); ?> -->
    <table class="table table-stripped table-dark">
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due date</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr valign="middle">
                <td><?php echo e($todo->name); ?></td>
                <td><?php echo e($todo->work); ?></td>
                <td><?php echo e($todo->duedate); ?></td>
                <td>
                    <a href="<?php echo e(route("todo.edit",$todo->id)); ?>" class="btn btn-success btn-sm">Update</a>
                    <a href="<?php echo e(route("todo.delete",$todo->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-app\resources\views/welcome.blade.php ENDPATH**/ ?>