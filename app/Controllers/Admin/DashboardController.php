<?php

namespace App\Controllers\Admin;

class DashboardController
{
    public function index()
    {
        $title = 'Job Portal Dashboard';
        require ABSPATH . '/resources/admin/dashboard/index.php';
    }
}
