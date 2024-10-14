<?php

namespace App\Controllers\User;

class HomeController
{
    public function index()
    {
        require ABSPATH . '/resources/user/home/index.php';
    }
}
