
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>Announcement</h2>
    </div>
    <div class="mt-3">

        <div>
            <form method="POST" action="<?php echo e(route('admin.announcement.update', ['id' => $announcement->id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <textarea class="form-control mb-3" id="announcement" name="announcement" rows="3"><?php echo e($announcement->announcement); ?></textarea>
                </div>

                <input class="btn btn-info" type="submit" value="Update">
            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/admin/announcement/index.blade.php ENDPATH**/ ?>