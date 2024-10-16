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

    <section class="hero-wrapper">
        <div class="hero-overlay"></div>
        <!-- end hero-overlay -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content-wrapper position-relative">
                        <div class="hero-heading text-center">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-65">
                                    The #1 Job Board for Hiring Designers <br />
                                    and Creative Professionals
                                </h2>
                                <p
                                    class="sec__desc line-height-30 font-weight-medium color-white-rgba">
                                    Each month, more than 3 million job seekers turn to website
                                    in their search for work, <br />
                                    making over 140,000 applications every single day
                                </p>
                            </div>
                            <div class="btn-box margin-top-35px">
                                <a
                                    href="employer-dashboard-post-job.html"
                                    class="theme-btn bg-3">Post a Job</a>
                            </div>
                        </div>
                        <!-- end hero-heading -->
                        <div class="hero-form-wrap position-absolute">
                            <div class="main-search-input">
                                <div class="main-search-input-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="form-group mb-0">
                                                <span class="la la-search form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="Job title" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end main-search-input-item -->
                                <div
                                    class="main-search-input-item user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="1">All Category</option>
                                    </select>
                                </div>
                                <!-- end main-search-input-item -->
                                <div class="main-search-input-btn">
                                    <a href="#" class="button theme-btn line-height-50">Search Jobs</a>
                                </div>
                                <!-- end main-search-input-btn -->
                            </div>
                            <!-- end main-search-input -->
                        </div>
                        <!-- end hero-form-wrap -->
                    </div>
                    <!-- end hero-content-wrapper -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="card-area padding-top-100px padding-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">
                            All Your Job Postings
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="tab-shared">
                        <ul
                            class="nav nav-tabs justify-content-center"
                            id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link theme-btn active"
                                    id="recent-tab"
                                    data-bs-toggle="tab"
                                    href="#recent-job"
                                    role="tab"
                                    aria-controls="recent-job"
                                    aria-selected="true">
                                    Recent Jobs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link theme-btn"
                                    id="feature-tab"
                                    data-bs-toggle="tab"
                                    href="#feature-job"
                                    role="tab"
                                    aria-controls="feature-job"
                                    aria-selected="false">
                                    Feature Jobs
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content margin-top-35px" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="recent-job"
                            role="tabpanel"
                            aria-labelledby="recent-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <div class="job-card">
                                        <div class="job-card-content">
                                            <div class="card-head d-flex align-items-center">
                                                <div class="company-avatar me-3">
                                                    <a href="employer-details.html" class="d-block">
                                                        <svg
                                                            class="card-svg"
                                                            version="1.1"
                                                            id="Capa_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            x="0px"
                                                            y="0px"
                                                            viewBox="0 0 512 512"
                                                            style="enable-background: new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <circle
                                                                style="fill: #423966"
                                                                cx="256"
                                                                cy="255.997"
                                                                r="255.997" />
                                                            <path
                                                                style="fill: #2c2547"
                                                                d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
	v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
	c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z" />
                                                            <g>
                                                                <rect
                                                                    x="172.853"
                                                                    y="117.47"
                                                                    style="fill: #a48dff"
                                                                    width="27.719"
                                                                    height="27.719" />
                                                                <path
                                                                    style="fill: #a48dff"
                                                                    d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z" />
                                                                <rect
                                                                    x="311.438"
                                                                    y="145.199"
                                                                    style="fill: #a48dff"
                                                                    width="27.719"
                                                                    height="27.719" />
                                                                <rect
                                                                    x="311.438"
                                                                    y="255.937"
                                                                    style="fill: #a48dff"
                                                                    width="27.719"
                                                                    height="27.719" />
                                                                <rect
                                                                    x="366.876"
                                                                    y="255.937"
                                                                    style="fill: #a48dff"
                                                                    width="27.719"
                                                                    height="27.719" />
                                                                <rect
                                                                    x="366.876"
                                                                    y="200.549"
                                                                    style="fill: #a48dff"
                                                                    width="27.719"
                                                                    height="27.719" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="company-title-box">
                                                    <h4 class="card-title mb-1">
                                                        <a href="employer-details.html">BlueTech</a>
                                                    </h4>
                                                    <p class="card-sub">
                                                        <i class="la la-map-marker"></i> Aberdeen, United
                                                        Kingdom
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-content mt-4 margin-bottom-30px">
                                                <h4 class="card-title mb-2">
                                                    <a href="job-details.html">Graphic Designer</a>
                                                </h4>
                                                <p class="card-sub">
                                                    Sed quia lipsum dolor sit atur adipiscing elit is
                                                    nunc quis tellus sed ligula
                                                </p>
                                            </div>
                                            <div class="section-block-2"></div>
                                            <div
                                                class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                <span class="color-text-2 font-size-13">
                                                    $20 - $25 /hr</span>
                                            </div>
                                        </div>
                                        <!-- end job-card-content -->
                                    </div>
                                    <!-- end job-card -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div
                            class="tab-pane fade"
                            id="feature-job"
                            role="tabpanel"
                            aria-labelledby="feature-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <div class="job-card">
                                        <div class="job-card-content">
                                            <div class="card-head d-flex align-items-center">
                                                <div class="company-avatar me-3">
                                                    <a href="employer-details.html" class="d-block">
                                                        <svg
                                                            class="card-svg"
                                                            version="1.1"
                                                            id="Capa_7"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            x="0px"
                                                            y="0px"
                                                            viewBox="0 0 512 512"
                                                            style="enable-background: new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <circle
                                                                style="fill: #263364"
                                                                cx="256"
                                                                cy="256"
                                                                r="256" />
                                                            <path
                                                                style="fill: #151f45"
                                                                d="M358.365,200.896c-3.076,1.955-6.348,4.972-9.815,9.046l-10.753-10.753h-44.549v74.864
                                                            L151.473,132.279h-50.524v248.182l130.349,130.349C239.427,511.588,247.665,512,256,512c125.879,0,230.536-90.853,251.978-210.563
                                                            l-97.297-97.297C394.909,194.75,373.92,191.013,358.365,200.896z" />
                                                            <g>
                                                                <path
                                                                    style="fill: #c9e1f6"
                                                                    d="M100.949,380.461V132.279h50.524V338.3h125.628v42.16H100.949V380.461z" />
                                                                <path
                                                                    style="fill: #c9e1f6"
                                                                    d="M341.211,380.461h-47.963V199.19h44.55v25.774c7.622-12.175,14.479-20.197,20.568-24.067
                                                                c15.554-9.884,36.544-6.146,52.316,3.244l-14.85,41.818c-13.021-8.431-28.075-11.438-39.6-2.305
                                                                c-4.668,3.699-8.337,10.386-11.009,20.056C340.326,281.411,341.211,325.575,341.211,380.461z" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="company-title-box">
                                                    <h4 class="card-title mb-1">
                                                        <a href="employer-details.html">TechyNectar</a>
                                                    </h4>
                                                    <p class="card-sub">
                                                        <i class="la la-map-marker"></i> Aberdeen, United
                                                        Kingdom
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-content mt-4 margin-bottom-30px">
                                                <h4 class="card-title mb-2">
                                                    <a href="job-details.html">Finance Manager & Health</a>
                                                </h4>
                                                <p class="card-sub">
                                                    Sed quia lipsum dolor sit atur adipiscing elit is
                                                    nunc quis tellus sed ligula
                                                </p>
                                            </div>
                                            <div class="section-block-2"></div>
                                            <div
                                                class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                <span class="color-text-2 font-size-13">
                                                    $20 - $25 /hr</span>
                                            </div>
                                        </div>
                                        <!-- end job-card-content -->
                                    </div>
                                    <!-- end job-card -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab-pane -->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box text-center mt-4">
                        <a href="job-grid-view.html" class="theme-btn">View all Jobs</a>
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="mobile-app-area padding-top-100px padding-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mobile-img">
                        <img src="<?php ABSPATH ?> /public/user/images/mobile.jpg" alt="mobile-img" />
                    </div>
                </div>
                <!-- end col-lg-5 -->
                <div class="col-lg-6 ms-auto">
                    <div class="mobile-app-content">
                        <div class="section-heading margin-bottom-30px">
                            <h2 class="sec__title">
                                Download Our Mobile App Search for Jobs on the Go
                            </h2>
                        </div>
                        <!-- end section-heading -->
                        <ul class="info-list contact-links">
                            <li class="d-flex align-items-center mb-4">
                                <span class="flex-shrink-0 la la-search-plus"></span>
                                <div class="app-title-box">
                                    <h4 class="widget-title pb-2 font-weight-bold">
                                        AR Job Search
                                    </h4>
                                    <p class="color-text-3">
                                        Omnis voluptas assumenda est, omnis dolor repellendus.
                                        Temporibus autem quibusdam et aut officiis debitis aut
                                        rerum necessitatibus saepe urna ut viverra.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <span class="flex-shrink-0 la la-map-marker"></span>
                                <div class="app-title-box">
                                    <h4 class="widget-title pb-2 font-weight-bold">
                                        Search on the go
                                    </h4>
                                    <p class="color-text-3">
                                        Omnis voluptas assumenda est, omnis dolor repellendus.
                                        Temporibus autem quibusdam et aut officiis debitis aut
                                        rerum necessitatibus saepe urna ut viverra.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <span class="flex-shrink-0 la la-bell-o"></span>
                                <div class="app-title-box">
                                    <h4 class="widget-title pb-2 font-weight-bold">
                                        Instant Notifications
                                    </h4>
                                    <p class="color-text-3">
                                        Omnis voluptas assumenda est, omnis dolor repellendus.
                                        Temporibus autem quibusdam et aut officiis debitis aut
                                        rerum necessitatibus saepe urna ut viverra.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-box d-flex text-start margin-top-40px">
                            <a href="#" class="theme-btn download-btn"><i class="la la-apple"></i>App Store</a>
                            <a href="#" class="theme-btn download-btn"><i class="la la-android"></i>Google Play</a>
                        </div>
                        <!-- end btn-box -->
                    </div>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <?php require ABSPATH . '/resources/user/layout/footer.php'; ?>