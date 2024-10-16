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
                            <h2 class="sec__title">Edit Profile</h2>
                        </div>
                        <!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li>Edit Profile</li>
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
                            <form action="<?php echo $router->generate('company.upload.photo'); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $company->getId(); ?>">
                                <input type="hidden" name="old_image" value="/Applications/XAMPP/xamppfiles/htdocs/php/jobportal<?php echo $company->getPhoto(); ?>">
                                <div class="user-pro-img mb-3">
                                    <img
                                        src="<?php echo $company->getPhoto(); ?>"
                                        alt=" user-image"
                                        class="img-fluid radius-round border" />
                                </div>
                                <div class="user-upload-img-wrap">
                                    <div class="file-upload-wrap file-upload-wrap-2">
                                        <input
                                            type="file"
                                            name="photo"
                                            class="file-upload-input"
                                            id="image" />
                                        <img id="showImage" class="rounded-circle bg-primary" width="120">
                                        <span class="file-upload-text"><i class="la la-photo me-2"></i>Upload Photo</span>
                                        <p>
                                            Max file size is 5MB, Minimum dimension: 200x200 And
                                            Suitable files are .jpg & .png
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit">
                                    Upload
                                </button>
                            </form>
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
                                    <h3 class="widget-title pb-0">Company Profile</h3>
                                    <div class="title-shape margin-top-10px"></div>
                                </div>
                                <!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form action="<?php echo $router->generate('company.update.profile'); ?>" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $company->getId(); ?>">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Company Name</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                name="name"
                                                                value="<?php echo $company->getName(); ?>"
                                                                placeholder="Company name" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Phone</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                name="phone"
                                                                value="<?php echo $company->getPhone(); ?>"
                                                                placeholder="Phone" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Address</label>
                                                        <div class="form-group">
                                                            <span
                                                                class="la la-building-o form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                name="address"
                                                                value="<?php echo $company->getAddress(); ?>"
                                                                placeholder="Address" />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Email</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                name="email"
                                                                value="<?php echo $company->getEmail(); ?>"
                                                                disabled />
                                                        </div>
                                                    </div>
                                                    <!-- end input-box -->
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">About Your Company</label>
                                                        <div class="form-group">
                                                            <textarea class="message-control form-control pt-3 pe-4 pb-3 ps-4" name="about"><?php echo $company->getAbout(); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" style="margin-left: 93%;" type="submit">
                                                Update
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

    <?php require ABSPATH . '/resources/user/layout/footer.php'; ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>