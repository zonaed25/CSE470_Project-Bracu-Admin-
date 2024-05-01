
<?php $__env->startSection('content'); ?>
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('images/1.jpeg')); ?>"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('images/2.jpeg')); ?>"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('images/3.jpeg')); ?>"
                    class="d-block w-100">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6 text-right">
                <img class="w-75" src="<?php echo e(asset('images/blogs/' . $blog->image)); ?>">
            </div>
            <div class="col-6">
                <h2><?php echo e($blog->title); ?></h2>
                <p><?php echo e($blog->description); ?></p>
                <a href="<?php echo e(route('student.view-blog', $blog->id)); ?>" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div>
            <h2 class="text-uppercase text-center clr pb-4">upcomming event</h2>
            <div class="text-center">
                <div class="w-75 m-auto calendar" id="calendar"></div>
            </div>
        </div>

    </div>


    <div class="announcement bg-dark pt-2 pb-1 text-white">
        <marquee direction="left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur voluptatem facilis molestiae labore ipsum explicabo vitae reprehenderit aspernatur sequi maxime!</marquee>
    </div>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: <?php echo json_encode($events); ?>,
        });

        calendar.render();
    });
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/student/index.blade.php ENDPATH**/ ?>