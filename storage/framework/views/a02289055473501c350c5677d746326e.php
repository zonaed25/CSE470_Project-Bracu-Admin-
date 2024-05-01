

<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>Edit Event</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="<?php echo e(route('admin.event.update', $event)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="<?php echo e($event->date); ?>">
            </div>

            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo e($event->title); ?>">
            </div>

            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/admin/event/edit.blade.php ENDPATH**/ ?>