<?php require ABSPATH . '/resources/admin/layout/header.php' ?>

<body>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php require ABSPATH . '/resources/admin/layout/navbar.php' ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php require ABSPATH . '/resources/admin/layout/sidebar.php' ?>

                    <div class="pcoded-content">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Create Category</h5>
                                </div>
                                <div class="card-block">
                                    <form action="<?php echo $router->generate('add.category'); ?>" method="POST" class="form-material">
                                        <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Category Name</label>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require ABSPATH . '/resources/admin/layout/footer.php' ?>