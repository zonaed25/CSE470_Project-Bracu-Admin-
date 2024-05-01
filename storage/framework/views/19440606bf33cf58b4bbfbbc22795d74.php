
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
                <select name="title" id="title" class="form-control">
                    <option value="Semester Fee">Semester Fee</option>
                    <option value="Makeup Mid fee">Makeup Mid fee</option>
                    <option value="Degree fee">Degree fee</option>
                    
                </select>
            </div>
            
            <div class="form-group">
                <label for="transaction_id">Transaction id <img style="max-width: 100px" src="https://media.licdn.com/dms/image/D5612AQHTrJ5hVKSZDA/article-cover_image-shrink_720_1280/0/1676188158893?e=2147483647&v=beta&t=zp4P6UrRlTva-fftra0m9Ud-kHH8q-UBC_TuEzQ18No"></label>
                <input type="text" name="transaction_id" id="transaction_id" class="form-control">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/student/make-payment.blade.php ENDPATH**/ ?>