

<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Payment</h2>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fee Title</th>
                    <th scope="col">Fee</th>
                    <th scope="col">Transaction id</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($payment->user->name); ?></td>
                    <td><?php echo e($payment->user->email); ?></td>
                    <td><?php echo e($payment->fee_name); ?></td>
                    <td><?php echo e($payment->fee); ?> /-</td>
                    <td><?php echo e($payment->tr_id); ?></td>
                    <td><?php echo e($payment->created_at->format('d-M-Y')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/admin/payment/index.blade.php ENDPATH**/ ?>