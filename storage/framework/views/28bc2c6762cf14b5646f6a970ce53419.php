
<?php $__env->startSection('content'); ?>
<div class="container pt-5">
    <div>
        <h2>My Payments</h2>
        <button class="btn btn-sm btn-primary">Add</button>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Payed Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td>Exam Fee</td>
                    <td>1250/-</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\Websites\Bracu\resources\views/student/payment.blade.php ENDPATH**/ ?>