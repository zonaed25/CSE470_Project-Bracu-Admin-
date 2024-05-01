
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
        <marquee direction="left"><?php echo e($announcement->announcement); ?></marquee>
    </div>
</div>



<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "172726545927590");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v18.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>




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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\bracu\resources\views/student/index.blade.php ENDPATH**/ ?>