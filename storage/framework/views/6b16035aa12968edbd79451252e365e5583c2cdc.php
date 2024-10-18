
<?php $__env->startPush('head'); ?>
<title>Update Todo</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-section'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
        <div class="h2">Update Todo</div>
        <a href="<?php echo e(route("todo.home")); ?>" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route("todo.updateData")); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="" class="form-label mt-4">Task Name</label><!-- mt-4 = margin 4 -->
                <input type="text" name="name" class = "form-control" id="" value="<?php echo e($todo->name); ?>">
                <label for="" class="form-label mt-4">Description</label>
                <input type="text" name="work" class = "form-control" id="" value="<?php echo e($todo->work); ?>">
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="duedate" class = "form-control" id="" value="<?php echo e($todo->duedate); ?>">
                <input type="number" name="id" value="<?php echo e($todo->id); ?>" hidden>
                <button class="btn btn-primary btn-lg mt-4">Update Todo</button>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test-app\resources\views/update.blade.php ENDPATH**/ ?>