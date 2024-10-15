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
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Manage Category</h5>
                                    <div class="card-header-right">
                                        <a class="btn btn-primary btn-sm" href="<?php echo $router->generate('add.category.page'); ?>">
                                            Create Category
                                        </a>
                                    </div>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category Name</th>
                                                    <th>Slug</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($categories as $category): ?>
                                                <tbody>
                                                    <tr class="table-active">
                                                        <th scope="row">
                                                            <?php echo $category->getId(); ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $category->getName(); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $category->getSlug(); ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $category->getCreatedAt(); ?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-warning btn-sm" href="<?php echo $router->generate('edit.category.page', ['id' => $category->getId()]); ?>">
                                                                Edit
                                                            </a>
                                                            <a id="confirm" class="btn btn-danger btn-sm" href="<?php echo $router->generate('delete.category', ['id' => $category->getId()]); ?>">
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php require ABSPATH . '/resources/admin/layout/footer.php' ?>