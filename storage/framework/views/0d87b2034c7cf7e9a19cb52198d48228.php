
<?php $__env->startSection('content'); ?>
<div>
    <div class="album container mt-5">
        <div class="col-12">
            <h1 class="headding text-center pb-4">All Blogs</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;"
                    src="<?php echo e(asset('images/blog.jpg')); ?>">
                    <div class="card-body">
                        <h5 class="card-text">Lorem ipsum dolor sit.</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;"
                    src="<?php echo e(asset('images/blog.jpg')); ?>">
                    <div class="card-body">
                        <h5 class="card-text">Lorem ipsum dolor sit.</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\Websites\Bracu\resources\views/student/blog.blade.php ENDPATH**/ ?>