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

    <section class="breadcrumb-area job-single-breadcrumb">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <div class="bread-details d-flex align-items-center">
                                <div class="bread-img flex-shrink-0">
                                    <img src="<?php echo $job->getCompany()->getPhoto(); ?>" alt="<?php echo $job->getCompany()->getName(); ?>" />
                                </div>
                                <div class="job-detail-content">
                                    <h2 class="widget-title font-size-30 text-white pb-1">
                                        <?php echo $job->getTitle(); ?>
                                    </h2>
                                    <p class="font-size-16 mt-1 text-white">
                                        <span class="me-2 mb-2 d-inline-block"><i class="la la-building-o me-1"></i>
                                            <?php echo $job->getCompany()->getName(); ?>
                                        </span>
                                        <span class="me-2 mb-2 d-inline-block"><i class="la la-map-marker me-1"></i><?php echo $job->getCompany()->getAddress(); ?></span>
                                        <span class="me-2 mb-2 d-inline-block"><i class="la la-calendar me-1"></i>Created At: <?php echo $job->getCompany()->getCreatedAt(); ?></span>
                                        <br />
                                        <span><i class="la la-eye me-1"></i>
                                            <?php echo $job->getCompany()->getCompanyUser()->getEmployee(); ?> Employees
                                        </span>
                                        -
                                        <span><i class="la la-eye me-1"></i>Website: <a style="color: white;" href="<?php echo $job->getCompany()->getCompanyUser()->getWebsite(); ?>">
                                                <?php echo $job->getCompany()->getCompanyUser()->getWebsite(); ?>
                                            </a></span>
                                    </p>
                                </div>
                                <!-- end job-detail-content -->
                            </div>
                            <!-- end bread-details -->
                            <div class="bread-action">
                                <ul class="listing-info">
                                    <li>
                                        <button type="button" class="theme-btn me-1">
                                            <i class="la la-heart-o font-size-16"></i> Wishlists
                                        </button>
                                    </li>
                                    <?php if (isset($_SESSION['company']) && $_SESSION['company']['role'] === 'company'): ?>

                                    <?php elseif (isset($_SESSION['jobseeker']) && $_SESSION['jobseeker']['role'] === 'jobseeker'): ?>
                                        <button type="button" class="theme-btn border-0">
                                            Apply Now
                                        </button>
                                    <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- end bread-action -->
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

    <section class="job-details padding-top-100px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-job-wrap">
                        <div class="job-description padding-bottom-35px">
                            <h2 class="widget-title">Description:</h2>
                            <div class="title-shape"></div>
                            <p class="mt-3 mb-3">
                                <?php echo $job->getDescription(); ?>
                            </p>
                        </div>
                        <div class="job-description padding-bottom-35px">
                            <h2 class="widget-title">Skill Requirements:</h2>
                            <div class="title-shape"></div>
                            <p class="mt-3 mb-3">
                                <?php echo $job->getskillRequirement(); ?>
                            </p>
                        </div>
                        <!-- end job-description -->
                        <div class="job-description padding-bottom-35px">
                            <h2 class="widget-title">Qualifications:</h2>
                            <div class="title-shape"></div>
                            <ul class="list-items mt-3">
                                <li class="font-size-16">
                                    <i class="la la-check-circle-o me-1"></i>
                                    <?php echo $job->getQualification(); ?>
                                </li>
                            </ul>
                        </div>
                        <!-- end job-description -->
                        <div class="job-description padding-bottom-35px">
                            <h2 class="widget-title font-size-16">
                                If you are a qualified candidate interested in this
                                opportunity, please apply.
                            </h2>
                            <h2 class="widget-title">About <?php echo $job->getCompany()->getName(); ?>:</h2>
                            <div class="title-shape"></div>
                            <p class="mt-3 mb-3">
                                <?php echo $job->getCompany()->getAbout(); ?>
                            </p>
                        </div>
                        <div
                            class="user-action-card section-bg p-4 radius-round d-flex align-items-center justify-content-between">
                            <div class="user-action-heading">
                                <h2 class="widget-title pb-2">Apply to this job</h2>
                                <p>Think you're the perfect candidate for this job?</p>
                            </div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn">Apply Now</a>
                            </div>
                            <!-- end btn-box -->
                        </div>
                        <!-- end user-action-card -->
                        <div class="related-job-post padding-top-40px">
                            <h2 class="widget-title">Related Jobs</h2>
                            <div class="title-shape"></div>
                            <div class="job-content margin-top-35px">
                                <?php if (!empty($relatedJobPostings)): ?>
                                    <?php foreach ($relatedJobPostings as $job): ?>
                                        <?php require ABSPATH . '/resources/user/layout/job.php'; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <!-- end job-content -->
                        </div>
                        <!-- end related-job-post-->
                        <div class="section-block mt-5"></div>
                        <div class="user-action-card mt-5">
                            <div class="user-action-heading text-center">
                                <a
                                    href="candidate-add-resume.html"
                                    class="section-bg font-size-16 color-text-2 font-weight-medium d-block p-3 radius-round">Click here to add your resume and let your next job find
                                    you</a>
                            </div>
                        </div>
                    </div>
                    <!-- end single-job-wrap -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap">
                                    <h3 class="widget-title">Job Details</h3>
                                    <div class="title-shape"></div>
                                </div>
                                <!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="info-list static-info">
                                        <ul>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-map-marker"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Location:</span>
                                                    <?php echo $job->getLocation(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-users"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Offered Salary:</span>
                                                    $<?php echo $job->getOfferedSalary(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-paper-plane-o"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Career Level:</span>
                                                    <?php echo $job->getLevel(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-bullhorn"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Experience:</span>
                                                    <?php echo $job->getExperience(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-desktop"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Job Type:</span>
                                                    <?php echo $job->getType(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-briefcase"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Category:</span>
                                                    <?php echo $job->getCategory()->getName(); ?>
                                                </p>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <p>
                                                    <i class="la la-graduation-cap"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Qualification:</span>
                                                    <?php echo $job->getQualification(); ?>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="billing-form-item">
                                <div class="billing-title-wrap">
                                    <h2 class="widget-title">Location</h2>
                                    <div class="title-shape"></div>
                                </div>
                                <div class="billing-content">
                                    <div class="listing-map gmaps">
                                        <div id="map"></div>
                                    </div>
                                    <!-- end listing-map -->
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="billing-form-item">
                                <div class="billing-title-wrap">
                                    <h3 class="widget-title">Company Information</h3>
                                    <div class="title-shape"></div>
                                </div>
                                <!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="info-list static-info">
                                        <ul>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-map-marker"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Headquarters:</span>
                                                    <?php echo $job->getCompany()->getAddress(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-users"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Employees:</span>
                                                    <?php echo $job->getCompany()->getCompanyUser()->getEmployee(); ?>
                                                </p>
                                            </li>
                                            <li class="mb-3 d-flex align-items-center">
                                                <p>
                                                    <i class="la la-file-text-o"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Posted Jobs:</span>
                                                    <?php echo count($relatedJobPostings); ?>
                                                </p>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <p>
                                                    <i class="la la-globe"></i>
                                                    <span class="color-text-2 font-weight-medium me-1">Website:</span><a href="#"> <?php echo $job->getCompany()->getCompanyUser()->getWebsite(); ?></a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <div class="billing-form-item">
                                <div class="billing-title-wrap">
                                    <h3 class="widget-title">Contact Bluetech, Inc</h3>
                                    <div class="title-shape"></div>
                                </div>
                                <!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="input-box">
                                                <label class="label-text">Your Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="text"
                                                        placeholder="Enter your name" />
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Email</label>
                                                <div class="form-group">
                                                    <span class="la la-envelope-o form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="name"
                                                        placeholder="Enter email address" />
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Message</label>
                                                <div class="form-group">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea
                                                        class="message-control form-control"
                                                        name="message"
                                                        placeholder="Message should have more than 150 characters"></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-box">
                                                <button class="theme-btn border-0 w-100 text-center">
                                                    Send Message
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end contact-form-action -->
                                </div>
                                <!-- end billing-content -->
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <div class="section-block"></div>

    <?php require ABSPATH . '/resources/user/layout/footer.php'; ?>