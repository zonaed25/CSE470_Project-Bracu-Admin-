
<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div>
        <h2>Make Complaint</h2>
    </div>

    <div class="mt-3">
        <form method="POST" action="<?php echo e(route('complaints.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <textarea class="form-control mb-3" name="details" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/student/make-complaint.blade.php ENDPATH**/ ?>