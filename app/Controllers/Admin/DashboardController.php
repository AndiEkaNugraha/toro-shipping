<?php
namespace App\Controllers\Admin;

use Core\View;
use App\Services\Auth;

class DashboardController {
    public function index($user_seo) {
        $user = Auth::user();
        return View::render(
            template:'admin/dashboard/index',
            layout: 'layout/admin/index',
            data: [
                'userAuthorize' => $user,
                'page' => 'dashboard'
            ]
        );
    }
}
