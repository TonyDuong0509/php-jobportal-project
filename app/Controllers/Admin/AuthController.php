<?php

namespace App\Controllers\Admin;

use App\Services\UserService;
use DateTime;
use DateTimeZone;

class AuthController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    private function getDateTime()
    {
        $date = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
        return $date->format('Y-m-d H:i:s');
    }

    public function registerForm()
    {
        require ABSPATH . '/admin/registerForm.php';
    }

    public function register()
    {
        $data = [];
        $data['name'] = $_POST['name'] ?? '';
        $data['phone'] = $_POST['phone'] ?? '';
        $data['address'] = $_POST['address'] ?? '';
        $data['email'] = $_POST['email'] ?? '';
        $data['about'] = '';
        $data['photo'] = '';
        $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $data['role'] = $_POST['role'] ?? '';
        $data['status'] = 0;
        $data['isLogged'] = 0;
        $data['createdAt'] = $this->getDateTime();

        if ($this->userService->findByEmail($_POST['email'])) {
            $_SESSION['notification'] = [
                'message' => 'Email is exist, please chose another email !',
                'alert-type' => 'error',
            ];
            header("Location: /admin/register/form");
            exit;
        }

        $this->userService->saveUser($data);
        $_SESSION['notification'] = [
            'message' => 'Register successfully, you can log in',
            'alert-type' => 'success',
        ];
        header("Location: /admin/login/form");
        exit;
    }

    public function loginForm()
    {
        require ABSPATH . '/admin/loginForm.php';
    }

    public function login()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->userService->findByEmail($email);
        if (!$user) {
            $_SESSION['notification'] = [
                'message' => 'Email is invalid, please try again',
                'alert-type' => 'error'
            ];
            header("Location: /admin/login/form");
            exit;
        }

        if (!password_verify($password, $user->getPassword())) {
            $_SESSION['notification'] = [
                'message' => 'Password is invalid, please try again',
                'alert-type' => 'error',
            ];
            header("Location: /admin/login/form");
            exit;
        }

        if ($user->getRole() !== 'admin') {
            $_SESSION['notification'] = [
                'message' => 'This account is not authorized, please try correct account',
                'alert-type' => 'error',
            ];
            header("Location: /admin/login/form");
            exit;
        }

        $_SESSION['admin'] = [
            'email' => $email,
            'name' => $user->getName(),
            'role' => $user->getRole(),
            'id' => $user->getId()
        ];

        $_SESSION['notification'] = [
            'message' => 'Sign in successfully',
            'alert-type' => 'success',
        ];
        header("Location: /admin/dashboard");
        exit;
    }

    public function logout()
    {
        unset($_SESSION['admin']['email']);
        $_SESSION['notification'] = [
            'message' => 'Logout successfully',
            'alert-type' => 'success',
        ];
        header("Location: /admin/login/form");
        exit;
    }
}
