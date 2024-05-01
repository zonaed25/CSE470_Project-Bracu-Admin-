<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!"><img height="50" src="<?php echo e(asset('images/logo-w.png')); ?>" alt="LOGO"></a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li class="<?php echo e(Request::is('student') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('student')); ?>">Home</a>
                </li>
                <li>
                    <a href="#!">Offices</a>
                    <ul class="nav-dropdown">
                        <li class="<?php echo e(Request::is('office/hr') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.hr')); ?>">HR Office</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/proctor') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.proctor')); ?>">Office of the Proctor</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/admission') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.admission')); ?>">Admission Office</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/shebrec') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.shebrec')); ?>">SHEBREC (Sexual Harassment, Exploitation, Bullying and Ragging Elimination Committee)</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/finance') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.finance')); ?>">Finance Office</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/oca') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.oca')); ?>">OCA (Office of Co-curricular Activities)</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/register') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.register')); ?>">Register Office</a>
                        </li>
                        <li class="<?php echo e(Request::is('office/exam-controller') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('office.exam_controller')); ?>">Exam Controller's Office</a>
                        </li>
                    </ul>

                </li>
                <li class="<?php echo e(Request::is('student/blog') || Request::is('student/view-blog') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('student.blog')); ?>">Blogs</a>
                </li>
                <li class="<?php echo e(Request::is('student/contact') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('student.contact')); ?>">Contact</a>
                </li>
                <li class="<?php echo e(Request::is('student/faq') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('student.faq')); ?>">FAQ</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="#!"><i class="fas fa-user-circle"></i></a>
                    <ul class="nav-dropdown">
                        <li class="<?php echo e(Request::is('student/profile') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('student.profile')); ?>">Profile</a>
                        </li>
                        <li class="<?php echo e(Request::is('student/complaint') || Request::is('student/make-complaint') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('student.complaint')); ?>">Complaint</a>
                        </li>
                        <li class="<?php echo e(Request::is('student/payment') || Request::is('student/make-payment') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('student.payment')); ?>">Payment</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>">Logout</a>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <?php endif; ?>
            </ul>

        </nav>
    </div>
</section><?php /**PATH D:\Xampp\htdocs\Websites\Bracu\resources\views/layouts/nav.blade.php ENDPATH**/ ?>