<?php

namespace App\Controllers\User;

use App\Services\CommonService;
use App\Services\CompanyService;
use App\Services\JobService;
use App\Services\UserService;

class CompanyController
{
    private $userService;
    private $commonService;
    private $companyService;
    private $jobService;

    public function __construct(
        UserService $userService,
        CommonService $commonService,
        CompanyService $companyService,
        JobService $jobService,
    ) {
        $this->userService = $userService;
        $this->commonService = $commonService;
        $this->companyService = $companyService;
        $this->jobService = $jobService;
    }

    public function index()
    {
        $title = 'Company Home';
        require ABSPATH . '/resources/user/company/index.php';
    }

    public function loginForm()
    {
        $title = 'Login Company';
        require ABSPATH . '/company/loginForm.php';
    }

    public function registerForm()
    {
        $title = 'Register Company';
        require ABSPATH . '/company/registerForm.php';
    }

    public function profile($id)
    {
        $title = 'Company Profile';
        $user = $this->userService->getById($id);
        $company = $this->companyService->getByUserId($user->getId());
        if (!$user) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }
        require ABSPATH . '/resources/user/company/profile.php';
    }

    public function updateProfile()
    {
        $id = $_POST['id'];
        $user = $this->userService->getById($id);
        $company = $this->companyService->getByUserId($user->getId());

        if (!$user) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }

        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $about = $_POST['about'] ?? '';
        $website = $_POST['website'] ?? '';
        $employee = (int)$_POST['employee'] ?? '';

        $user->setName($name);
        $user->setPhone($phone);
        $user->setAddress($address);
        $user->setAbout($about);

        $company->setWebsite($website);
        $company->setEmployee($employee);

        $this->userService->updateUser($user);
        $this->companyService->updateProfile($company);

        $_SESSION['notification'] = [
            'message' => 'Update profile successfully',
            'alert-type' => 'success',
        ];
        header("Location: /company/profile/$id");
        exit;
    }

    public function uploadPhoto()
    {
        $id = $_POST['id'];
        $oldImage = $_POST['old_image'] ?? '';
        $photo = $this->commonService->handleImage('company', 'photo', 'company', $id, $oldImage);
        $company = $this->userService->getById($id);

        if (!$company) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }

        $company->setPhoto($photo);

        $this->userService->uploadPhoto($company);

        $_SESSION['notification'] = [
            'message' => 'Upload company photo successfully',
            'alert-type' => 'success',
        ];
        header("Location: /company/profile/$id");
        exit;
    }

    public function changePasswordPage($id)
    {
        $title = 'Company Change Password';
        $company = $this->userService->getById($id);
        if (!$company) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }
        require ABSPATH . '/resources/user/company/changePassword.php';
    }

    public function changePassword()
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $newPassword = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
        $company = $this->userService->getById($id);

        if (!$company) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }

        $oldPassword = $company->getPassword();
        if (!password_verify($password, $oldPassword)) {
            $_SESSION['notification'] = [
                'message' => 'Old password incorrect, please try again',
                'alert-type' => 'error',
            ];
            header("Location: /company/change-password/$id");
            exit;
        }

        $company->setPassword($newPassword);

        $this->userService->changePassword($company);

        $_SESSION['notification'] = [
            'message' => 'Change password successfully',
            'alert-type' => 'success',
        ];
        header("Location: /company/change-password/$id");
        exit;
    }

    public function jobPostings()
    {
        $title = 'Company Job Postings';
        $existingCompany = $_SESSION['company'];
        if (!$existingCompany) {
            $_SESSION['notification'] = [
                'message' => 'Please login',
                'alert-type' => 'error',
            ];
            header("Location: /company/login/form");
            exit;
        }

        $id = $_SESSION['company']['id'];

        $user = $this->userService->getById($id);
        if (!$user) {
            $_SESSION['notification'] = [
                'message' => 'Company not exist',
                'alert-type' => 'error',
            ];
            header("Location: /company/home");
            exit;
        }

        $jobPostings = $this->jobService->getJobPostingsOfCompany($user->getId());

        require ABSPATH . '/resources/user/company/jobPostings.php';
    }
}
