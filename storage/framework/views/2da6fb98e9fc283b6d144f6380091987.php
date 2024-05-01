<nav class="nav-max sideNav">
    <button id="toggle-nav-btn" class="circle"><i class="fas fa-stream"></i></button>
    <header class="mt-3">
        <div class="box nav-link"><img src="<?php echo e(asset('images/users/user.png')); ?>" alt="Profile Image"></div>
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
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-clipboard-list"></i></div>
                <span>Compliment</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-coins"></i></div>
                <span>Payment</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-volume-down"></i></div>
                <span>Announcemnt</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-calendar-day"></i></div>
                <span>Event</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-newspaper"></i></div>
                <span>Blog</span>
            </a>
        </li>
        <?php else: ?>
        <li class="<?php echo e(Request::is('student') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('student')); ?>">
                <div class="box"><i class="fas fa-tachometer-alt"></i></div>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-home"></i></div>
                <span>Home/Blog</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-address-card"></i></div>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-clipboard-list"></i></div>
                <span>Complaint</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-coins"></i></div>
                <span>Payment</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-volume-down"></i></div>
                <span>Announcement</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-calendar-day"></i></div>
                <span>Event</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-phone"></i></div>
                <span>Contact</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('/')); ?>">
                <div class="box"><i class="fas fa-question"></i></div>
                <span>FAQ</span>
            </a>
        </li>
        <?php endif; ?>
        <li class="<?php echo e(Request::is('change-password') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('change-password')); ?>">
                <div class="box"><i class="fas fa-key"></i></div>
                <span>Change Password</span>
            </a>
        </li>
        <br>
        <hr>
        <li>
            <a href="<?php echo e(route('logout')); ?>">
                <div class="box"><i class="fas fa-sign-out-alt"></i></div>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</nav><?php /**PATH D:\Xampp\htdocs\Websites\bracu-office\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>