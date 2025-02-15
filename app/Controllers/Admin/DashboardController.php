<?php
namespace App\Controllers\Admin;

use Core\View;

class DashboardController {
    public function index($user_seo) {
        return View::render(
            template:'admin/dashboard/index',
            layout: 'layout/admin/index'
        );
    }
}
