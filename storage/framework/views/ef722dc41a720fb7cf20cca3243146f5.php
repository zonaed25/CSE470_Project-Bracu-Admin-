
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Complaint</h2>
    </div>

    <div class="mt-3">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Complaint</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td>Rifatul Islam</td>
                    <td>rifat@gmail.com</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, qui.</td>
                    <td class="align-middle">
                        <a href="" class="btn btn-sm btn-success">Pending</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\Websites\Bracu\resources\views/admin/complaint/index.blade.php ENDPATH**/ ?>