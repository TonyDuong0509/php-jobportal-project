<?php

namespace App\Controllers\User;

class CompanyController
{
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
}
