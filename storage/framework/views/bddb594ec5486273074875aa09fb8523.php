
<?php $__env->startSection('content'); ?>
<div class="p-4">
    <div>
        <h2>All Blog</h2>
        <a href="<?php echo e(route('blog.create')); ?>"><button class="btn btn-info">Create</button></a>
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
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="font-weight-bold align-middle"><?php echo e($blog->title); ?></td>
                        <td><img src="<?php echo e(asset('images/blogs/' . $blog->image)); ?>"></td>
                        <td class="align-middle"><?php echo e($blog->description); ?></td>
                        <td class="align-middle">
                            <form action="<?php echo e(route('admin.blog.destroy', $blog)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog entry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>