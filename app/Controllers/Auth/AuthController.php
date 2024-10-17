<?php

namespace App\Controllers\Auth;

use App\Services\CompanyService;
use App\Services\UserService;
use Utils\Helper;

class AuthController
{
    private $userService;
    private $companyService;

    public function __construct(
        UserService $userService,
        CompanyService $companyService
    ) {
        $this->userService = $userService;
        $this->companyService = $companyService;
    }

    public function register($model)
    {
        $data = [];
        $data['email'] = $_POST['email'];
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['address'] = $_POST['address'];
        $data['about'] = '';
        $data['photo'] = '';
        $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $data['role'] = $_POST['role'];
        $data['status'] = 0;
        $helper = new Helper();
        $data['createdAt'] = $helper->getDateTime();

        if (empty($this->userService->getAllUsers())) {
            $data['role'] = 'admin';
        }

        if ($this->userService->getByEmail($_POST['email'])) {
            $_SESSION['notification'] = [
                'message' => 'Email is exist, please chose another email !',
                'alert-type' => 'error',
            ];
            header("Location: /$model/register/form");
            exit;
        }

        return $this->userService->saveUser($data);
    }

    public function registerCompany()
    {
        $userId = $this->register('company');
        $user = $this->userService->getById($userId);
        if ($user->getRole() === 'company') {
            $this->companyService->createCompany($userId);
        }

        $_SESSION['notification'] = [
            'message' => 'Register successfully, you can log in',
            'alert-type' => 'success',
        ];
        header("Location: /company/login/form");
        exit;
    }

    public function loginForm()
    {
        $title = 'Admin Log In';
        require ABSPATH . '/admin/loginForm.php';
    }

    public function login($model)
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->userService->getByEmail($email);
        if (!($user)) {
            $_SESSION['notification'] = [
                'message' => 'Email is invalid, please try again',
                'alert-type' => 'error'
            ];
            header("Location: /$model/login/form");
            exit;
        }

        if (!password_verify($password, $user->getPassword())) {
            $_SESSION['notification'] = [
                'message' => 'Password is invalid, please try again',
                'alert-type' => 'error',
            ];
            header("Location: /$model/login/form");
            exit;
        }

        if ($user->getRole() !== "$model") {
            $_SESSION['notification'] = [
                'message' => 'This account is not authorized, please try correct account',
                'alert-type' => 'error',
            ];
            header("Location: /$model/login/form");
            exit;
        }

        $_SESSION["$model"] = [
            'email' => $email,
            'name' => $user->getName(),
            'role' => $user->getRole(),
            'id' => $user->getId()
        ];

        $_SESSION['notification'] = [
            'message' => 'Sign in successfully',
            'alert-type' => 'success',
        ];
        header("Location: /$model/dashboard");
        exit;
    }

    public function loginAdmin()
    {
        return $this->login('admin');
    }

    public function loginCompany()
    {
        return $this->login('company');
    }

    public function logout($model)
    {
        unset($_SESSION["$model"]['email']);
        $_SESSION['notification'] = [
            'message' => 'Logout successfully',
            'alert-type' => 'success',
        ];
        header("Location: /$model/login/form");
        exit;
    }

    public function logoutAdmin()
    {
        return $this->logout('admin');
    }

    public function logoutCompany()
    {
        return $this->logout('company');
    }
}
