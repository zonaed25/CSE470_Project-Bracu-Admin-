
<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div>
        <h2>Make Payment</h2>
    </div>

    <div class="mt-3">
        <form method="POST" action="<?php echo e(route('payments.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control">
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/student/make-payment.blade.php ENDPATH**/ ?>