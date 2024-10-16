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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Change Password</h2>
                        </div>
                        <!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li>Change Password</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="user-profile-action-wrap mb-5">
                        <div class="user-profile-action mb-4 d-flex align-items-center">
                            <div class="user-pro-img mb-3">
                                <img
                                    src="<?php echo $company->getPhoto(); ?>"
                                    alt=" user-image"
                                    class="img-fluid radius-round border" />
                            </div>
                        </div>
                    </div>
                    <!-- end user-profile-action-wrap -->
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="edit-profile-wrap">
                        <div class="user-form-action">
                            <div class="billing-form-item">
                                <div class="billing-title-wrap">
                                    <h3 class="widget-title pb-0">Company Change Password</h3>
                                    <div class="title-shape margin-top-10px"></div>
                                </div>
                                <!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form action="<?php echo $router->generate('company.change.password'); ?>" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $company->getId(); ?>">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Old Password</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="password"
                                                                name="password"
                                                                placeholder="Old Password" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <!-- end col-lg-6 -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">New Password</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="password"
                                                                name="new_password"
                                                                id="password"
                                                                placeholder="New Password" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Confirm Password</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="password"
                                                                name="confirm_password"
                                                                id="confirm-password"
                                                                placeholder="Confirm Password" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <div id="error-message" style="color: red; display: none;">Passwords do not match!</div>
                                            </div>
                                            <button class="btn btn-primary" style="margin-left: 94%;" type="submit">
                                                Change
                                            </button>
                                        </form>
                                    </div>
                                    <!-- end contact-form-action -->
                                </div>
                                <!-- end billing-content -->
                            </div>
                        </div>
                        <!-- end user-form-action -->
                    </div>
                    <!-- end edit-profile-wrap -->
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
        </div>
    </section>

    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm-password');
        const errorMessage = document.getElementById('error-message');

        // Add event listener to compare passwords
        confirmPassword.addEventListener('input', function() {
            if (password.value !== confirmPassword.value) {
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
            }
        });

        password.addEventListener('input', function() {
            if (password.value !== confirmPassword.value) {
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
            }
        });
    </script>
    <?php require ABSPATH . '/resources/user/layout/footer.php'; ?>