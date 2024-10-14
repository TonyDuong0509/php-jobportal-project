<?php

namespace App\Controllers\Admin;

class DashboardController
{
    public function index()
    {
        require ABSPATH . '/resources/admin/dashboard/index.php';
    }
}
