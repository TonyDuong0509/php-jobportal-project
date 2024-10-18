<div class="job-card job-card-layout">
    <div
        class="job-card-details d-flex align-items-center justify-content-between">
        <div class="card-head d-flex align-items-center">
            <div class="company-avatar me-3">
                <a href="<?php echo $router->generate('company.job.details', ['id' => $job->getId(), 'slug' => $job->getSlug()]); ?>">
                    <img
                        src="<?php echo $job->getImage(); ?>"
                        alt="<?php echo $job->getTitle(); ?>"
                        class="img-fluid radius-round border" />
                </a>
            </div>
            <div class="company-title-box">
                <p class="card-sub mb-1 font-weight-medium">
                    <?php
                    $now = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
                    $deadlineDate = new DateTime($job->getDeadlineDate(), new DateTimeZone('Asia/Ho_Chi_Minh'));
                    $interval = $now->diff($deadlineDate);
                    echo $interval->format('%r%a');
                    ?>
                    Days Ago
                </p>

                <h4 class="card-title mb-1">
                    <a href="<?php echo $router->generate('company.job.details', ['id' => $job->getId(), 'slug' => $job->getSlug()]); ?>">
                        <?php echo $job->getTitle(); ?></a>
                </h4>
                <p class="card-sub">
                    <span class="me-2"><i class="la la-building-o color-text-2"></i>
                        <?php echo $job->getCompany()->getName(); ?>
                    </span>
                    <span class="me-2"><i class="la la-map-marker color-text-2"></i>
                        <?php echo $job->getLocation(); ?></span>
                    <span class="me-2"><i class="la la-clock-o color-text-2"></i>
                        <?php echo $job->getType(); ?>
                    </span>
                    <span>Offered - $<?php echo $job->getOfferedSalary(); ?></span>
                </p>
            </div>
        </div>
        <div class="btn-box">
            <a href="<?php echo $router->generate('company.job.details', ['id' => $job->getId(), 'slug' => $job->getSlug()]); ?>" class="theme-btn">Job Details</a>
        </div>
    </div>
</div>