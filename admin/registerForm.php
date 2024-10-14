<?php require ABSPATH . '/resources/admin/layout/header.php' ?>

<body themebg-pattern="theme1">
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form action="<?php echo $router->generate('admin.register'); ?>" method="POST" class="md-float-material form-material">
                        <div class="text-center">
                            <img src="<?php ABSPATH ?> /public/admin/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Full Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="phone" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Phone Number</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="address" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" id="password" name="password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" id="confirm-password" name="confirm-password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="error-message" style="color: red; display: none;">Passwords do not match!</div>
                                <div class="form-group form-primary">
                                    <select name="role" class="form-control select-control" required>
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="jobseeker">Jobseeker</option>
                                        <option value="company">Company</option>
                                    </select>
                                </div>

                                <p style="text-decoration: underline; margin-top: 15px;">You already have account ? Please click <a style="color: blue" href="/admin/login/form">here</a> to log in !</p>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="/"><b>Back to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="<?php ABSPATH ?> /public/admin/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
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

    <?php require ABSPATH . '/resources/admin/layout/footer.php' ?>