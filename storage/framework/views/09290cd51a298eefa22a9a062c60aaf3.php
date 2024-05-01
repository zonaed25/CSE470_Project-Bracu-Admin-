
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Blog</h2>
        <a href=""><button class="btn btn-info">Create</button></a>
    </div>
    <div>
        <table class="table mt-5 table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="font-weight-bold align-middle">Lorem ipsum dolor sit.</td>
                    <td><img src="<?php echo e(asset('images/blog.jpg')); ?>"></td>
                    <td class="align-middle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus similique exercitationem voluptas, odio odit delectus tempore! Mollitia laboriosam voluptatum et nihil consequatur repellendus illo facere quam quas porro vitae illum, delectus quidem ea numquam tempore animi reiciendis placeat maiores at.</td>
                    <td class="align-middle">
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\Websites\Bracu\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>