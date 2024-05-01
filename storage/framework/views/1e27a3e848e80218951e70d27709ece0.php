
<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div>
        <h2>My Payments</h2>
        <a href="<?php echo e(route('student.make-payment')); ?>"><button class="btn btn-sm btn-primary">Add</button></a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Transaction id</th>
                    <th scope="col">Payed Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($payment->fee_name); ?></td>
                    <td><?php echo e($payment->tr_id); ?></td>
                    <td><?php echo e($payment->fee); ?> /-</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/student/payment.blade.php ENDPATH**/ ?>