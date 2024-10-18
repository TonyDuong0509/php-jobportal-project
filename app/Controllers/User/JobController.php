<?php

namespace App\Controllers\User;

use App\Services\CategoryService;
use App\Services\CompanyService;
use App\Services\JobService;
use Cocur\Slugify\Slugify;
use Utils\Helper;

class JobController
{
    private $jobService;
    private $categoryService;
    private $companyService;

    public function __construct(
        JobService $jobService,
        CategoryService $categoryService,
        CompanyService $companyService
    ) {
        $this->jobService = $jobService;
        $this->categoryService = $categoryService;
        $this->companyService = $companyService;
    }

    public function postJobPage()
    {
        $title = "Company Post Job";

        $categories = $this->categoryService->getAll();

        require ABSPATH . '/resources/user/company/postJobPage.php';
    }

    public function postJob()
    {
        if (!isset($_SESSION['company']) || empty($_SESSION['company'])) {
            $_SESSION['notification'] = [
                'message' => 'Please login to post a job',
                'alert-type' => 'error'
            ];
            header("Location: /company/login/form");
            exit;
        }

        $userId = (int)$_SESSION['company']['id'];

        $data = [];
        $data['title'] = $_POST['title'];
        $slugify = new Slugify();
        $data['slug'] = $slugify->slugify($data['title']);
        $data['type'] = $_POST['type'];
        $data['level'] = $_POST['level'];
        $data['categoryId'] = (int)$_POST['categoryId'];
        $data['companyId'] = $userId;
        $data['offeredSalary'] = $_POST['offeredSalary'];
        $data['experience'] = $_POST['experience'];
        $data['qualification'] = $_POST['qualification'];
        $data['skillRequirement'] = $_POST['skillRequirement'];
        $data['deadlineDate'] = $_POST['deadlineDate'];
        $data['location'] = $_POST['location'];
        $data['quantity'] = $_POST['quantity'];
        $data['description'] = $_POST['description'];
        $data['isFull'] = 0;
        $helper = new Helper();
        $data['createdAt'] = $helper->getDateTime();
        $data['image'] = $this->jobService->handleImage('job', 'image');

        if ($this->jobService->saveJob($data)) {
            $_SESSION['notification'] = [
                'message' => 'Post Job successfully',
                'alert-type' => 'success'
            ];
            header("Location: /company/home");
            exit;
        } else {
            $_SESSION['notification'] = [
                'message' => 'Post Job failed',
                'alert-type' => 'error'
            ];
            header("Location: /company/post-job-page");
            exit;
        }
    }

    public function jobDetails($id)
    {
        $title = 'Job Details';

        $job = $this->jobService->getById($id);
        $relatedJobPostings = $this->jobService->getJobPostingsOfCompany($job->getCompanyId());
        $relatedJobPostings = array_filter($relatedJobPostings, function ($relatedJob) use ($id) {
            return $relatedJob->getId() !== $id;
        });

        require ABSPATH . '/resources/user/job/jobDetails.php';
    }
}
