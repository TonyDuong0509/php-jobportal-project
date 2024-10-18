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
                            <h2 class="sec__title">Post a Job</h2>
                        </div>
                        <!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active__list-item">Dashboard</li>
                            <li>
                                <a href="/company/post-job-page">Post a Job</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end breadcrumb-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row mt-5">

                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Job Information</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div>
                        <!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <form action="<?php echo $router->generate('company.post.job'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="label-text">Job Image</label>
                                            <div class="user-profile-action-wrap mb-5">
                                                <div class="user-profile-action mb-4 d-flex align-items-center">
                                                    <div class="user-upload-img-wrap">
                                                        <div class="file-upload-wrap file-upload-wrap-2">
                                                            <input
                                                                type="file"
                                                                name="image"
                                                                class="file-upload-input"
                                                                id="image"
                                                                required
                                                                onchange="validateImage()" />
                                                            <img id="showImage" class="rounded-circle bg-primary" width="120">
                                                            <span class="file-upload-text"><i class="la la-photo me-2"></i>Upload Photo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="error-message" style="color: red; display: none;"></div>
                                        </div>

                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Title</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="title"
                                                        required
                                                        placeholder="Enter job title" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Type</label>
                                                <div
                                                    class="form-group user-chosen-select-container">
                                                    <select name="type" class="user-chosen-select" required>
                                                        <option value>Select Job Type</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Remote">Remote</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Career Level</label>
                                                <div
                                                    class="form-group user-chosen-select-container">
                                                    <select name="level" class="user-chosen-select" required>
                                                        <option value>Choose One</option>
                                                        <option value="Internship">Internship</option>
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="Junior">Junior</option>
                                                        <option value="Middle">Middle</option>
                                                        <option value="Senior">Senior</option>
                                                    </select>
                                                </div>
                                                <!-- end form-group -->
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">category</label>
                                                <div
                                                    class="form-group user-chosen-select-container">
                                                    <select name="categoryId" class="user-chosen-select" required>
                                                        <option value>Select a category</option>
                                                        <?php foreach ($categories as $category): ?>
                                                            <option value="<?php echo $category->getId(); ?>">
                                                                <?php echo $category->getName(); ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- end form-group -->
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Offered Salary</label>
                                                <div
                                                    class="form-group">
                                                    <div class="form-group">
                                                        <span
                                                            class="la la-dollar-sign form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="number"
                                                            name="offeredSalary"
                                                            required
                                                            placeholder="Offered Salary" />
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Experience</label>
                                                <div
                                                    class="form-group user-chosen-select-container">
                                                    <select name="experience" class="user-chosen-select" required>
                                                        <option value>Choose Experience</option>
                                                        <option value="No Experience">No Experience</option>
                                                        <option value="Less than 1 Year">Less than 1 Year</option>
                                                        <option value="1 to 2 Year(s)">1 to 2 Year(s)</option>
                                                        <option value="2 to 4 Year(s)">2 to 4 Year(s)</option>
                                                        <option value="3 to 5 Year(s)">3 to 5 Year(s)</option>
                                                        <option value="2 Years">2 Years</option>
                                                        <option value="3 Years">3 Years</option>
                                                        <option value="4 Years">4 Years</option>
                                                        <option value="Over 5 Years">Over 5 Years</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Qualification</label>
                                                <div
                                                    class="form-group user-chosen-select-container">
                                                    <select name="qualification" class="user-chosen-select" required>
                                                        <option value>Choose Qualification</option>
                                                        <option value="University">University</option>
                                                        <option value="Collage">Collage</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Deadline Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input
                                                        class="date-range form-control"
                                                        type="date"
                                                        required
                                                        name="deadlineDate" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Location</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        name="location"
                                                        required
                                                        placeholder="Enter Location" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Quantity</label>
                                                <div
                                                    class="form-group">
                                                    <div class="form-group">
                                                        <input
                                                            class="form-control"
                                                            type="number"
                                                            name="quantity"
                                                            required
                                                            placeholder="Enter Quantity" />
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Skill Requirements</label>
                                                <div class="form-group mb-0">
                                                    <textarea
                                                        class="message-control form-control user-text-editor" required
                                                        name="skillRequirement"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Job Description</label>
                                                <div class="form-group mb-0">
                                                    <textarea
                                                        class="message-control form-control user-text-editor" required
                                                        name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-12 -->
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="btn-box mt-4">
                                                <button type="submit" class="theme-btn border-0">
                                                    <i class="la la-plus"></i> Post Job
                                                </button>
                                            </div>
                                            <!-- end btn-box -->
                                        </div>
                                        <!-- end col-lg-12 -->
                                    </div>
                                </form>
                            </div>
                            <!-- end contact-form-action -->
                        </div>
                        <!-- end billing-content -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
        </div>
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

        function validateImage() {
            const fileInput = document.getElementById('image');
            const errorMessage = document.getElementById('error-message');
            const filePath = fileInput.value;

            // Các đuôi file hợp lệ
            const validExtensions = /(\.png|\.jpg|\.jpeg)$/i;

            // Kiểm tra xem file có hợp lệ hay không
            if (!validExtensions.exec(filePath)) {
                errorMessage.style.display = 'block';
                errorMessage.innerHTML = 'Please upload a valid image file (PNG, JPG, JPEG).';
                fileInput.value = ''; // Reset input
                document.getElementById('showImage').src = ''; // Reset image preview
            } else {
                errorMessage.style.display = 'none'; // Ẩn thông báo lỗi nếu hợp lệ

                // Hiển thị ảnh xem trước
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('showImage').src = e.target.result;
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>




    <!-- <div class="col-lg-12">
        <h4 class="mb-3">Job Image</h4>
        <div class="user-profile-action-wrap mb-5">
            <div class="user-profile-action mb-4 d-flex align-items-center">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="showImage">
                    <div class="user-pro-img mb-3">
                        <img
                            src=""
                            alt=" user-image"
                            class="img-fluid radius-round border" />
                    </div>
                    <div class="user-upload-img-wrap">
                        <div class="file-upload-wrap file-upload-wrap-2">
                            <input
                                type="file"
                                name="image"
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
    </div> -->