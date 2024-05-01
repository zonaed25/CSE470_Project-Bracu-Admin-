

<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>Create Event</h2>
    </div>
    <div class="mt-3">
        <form method="POST" action="<?php echo e(route('admin.event.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <button type="submit" class="btn btn-info">Add</button>
        </form>
            
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/admin/event/create.blade.php ENDPATH**/ ?>