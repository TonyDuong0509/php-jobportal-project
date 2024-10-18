<?php require ABSPATH . '/resources/user/layout/header.php'; ?>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-circle">
            <div class="loader">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
    </div>

    <?php require ABSPATH . '/resources/user/layout/navbarCompany.php'; ?>

    <section class="breadcrumb-area">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <div class="section-heading">
                                <h2 class="sec__title mb-0">Company's Job Postings</h2>
                            </div>
                            <!-- end section-heading -->
                            <ul class="list-items d-flex align-items-center">
                                <li class="active__list-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active__list-item">Pages</li>
                                <li>
                                    <a href="/company/job-postings">Job Postings</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
    </section>

    <section class="card-area padding-top-100px padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar mt-0">
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Search Job Title</h3>
                            <div class="contact-form-action mb-4">
                                <form action="#">
                                    <div class="form-group">
                                        <span class="la la-search form-icon"></span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="jobTitle"
                                            placeholder="Job title" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-9">
                    <div class="jobs-wrapper">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="job-content">
                                <?php if (!empty($jobPostings)): ?>
                                    <?php foreach ($jobPostings as $job): ?>
                                        <?php require ABSPATH . '/resources/user/layout/job.php'; ?>
                                    <?php endforeach; ?>

                                <?php else : ?>

                                    <h2 style="color: red;">You don't have Job Postings, please post a job !</h2>

                                <?php endif; ?>
                            </div>
                            <!-- end tab-pane -->
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end jobs-wrapper -->
                </div>
                <!-- end col-lg-9 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- end page-navigation-wrap -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <div class="section-block"></div>

    <?php require ABSPATH . '/resources/user/layout/footer.php'; ?>