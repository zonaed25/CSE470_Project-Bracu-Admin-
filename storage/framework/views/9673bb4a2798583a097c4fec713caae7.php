<nav class="nav-max sideNav">
    <button id="toggle-nav-btn" class="circle"><i class="fas fa-stream"></i></button>
    <header class="mt-3">
        <div class="box nav-link profile-img"><img src="<?php echo e(asset('images/users/user.png')); ?>" alt="Profile Image"></div>
        <div class="user_info">
            <h3><?php echo e(Auth::user()->name); ?></h3>
        </div>
    </header>
    <ul class="menu">
    <br>
    <hr>
        <?php if(Auth::check() && Auth::user()->role == 1): ?>
        <li class="<?php echo e(Request::is('admin') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin')); ?>">
                <div class="box"><i class="fas fa-tachometer-alt"></i></div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/complaint*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.complaint')); ?>">
                <div class="box"><i class="fas fa-clipboard-list"></i></div>
                <span>Complaint</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/payment*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.payment')); ?>">
                <div class="box"><i class="fas fa-coins"></i></div>
                <span>Payment</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/announcement*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.announcement')); ?>">
                <div class="box"><i class="fas fa-volume-down"></i></div>
                <span>Announcement</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/event*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.event')); ?>">
                <div class="box"><i class="fas fa-calendar-day"></i></div>
                <span>Event</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/blog*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.blog')); ?>">
                <div class="box"><i class="fas fa-newspaper"></i></div>
                <span>Blog</span>
            </a>
        </li>
        <li class="<?php echo e(Request::is('admin/change-password*') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('admin.change-password')); ?>">
                <div class="box"><i class="fas fa-key"></i></div>
                <span>Change Password</span>
            </a>
        </li>
        <?php endif; ?>
        
        <li>
            <a href="<?php echo e(route('logout')); ?>">
                <div class="box"><i class="fas fa-sign-out-alt"></i></div>
                <span>Logout</span>
            </a>
        </li>
    </ul>


</nav><?php /**PATH D:\xampp\htdocs\websites\Bracu\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>