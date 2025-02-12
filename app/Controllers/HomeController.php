<?php
namespace App\Controllers;

use Core\View;

class HomeController {
    public function index() {
        return View::render(
            template:'home/index',
            layout: 'layout/general/main',
            data: [
                'title' => 'Home'
            ]
        );
    }
}