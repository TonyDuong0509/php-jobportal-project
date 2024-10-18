<header class="header-area">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html"><img src="<?php ABSPATH ?> /public/user/images/logo2.png" alt="logo" /></a>
                        </div>
                        <!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="/company/home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Features<i class="la la-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">Jobseekers</a></li>
                                            <li>
                                                <a href="<?php echo $router->generate('company.job.postings'); ?>">My Job Postings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <?php if (isset($_SESSION['company']['email'])): ?>
                                            <a href="#">
                                                Hello - <?php echo $_SESSION['company']['name'] ?><i class="la la-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="<?php echo $router->generate('company.profile', ['id' => $_SESSION['company']['id']]); ?>">Profile Details</a></li>
                                                <li>
                                                    <a href="<?php echo $router->generate('company.change.password.page', ['id' => $_SESSION['company']['id']]); ?>">Change Password</a>
                                                </li>
                                                <li><a href="<?php echo $router->generate('auth.company.logout'); ?>">Logout</a></li>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                <a
                                    href="/company/post-job-page"
                                    class="theme-btn">
                                    <span class="la la-plus"></span>
                                    Post a Job
                                </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div>
                            <!-- end side-menu-open -->
                        </div>
                        <!-- end logo-right-content -->
                    </div>
                    <!-- end menu-full-width -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div>
            <!-- end humburger-menu-lines -->
        </div>
        <!-- end side-menu-wrap -->
    </div>
    <!-- end side-nav-container -->
</header>