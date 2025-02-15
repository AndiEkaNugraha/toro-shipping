<?php
namespace App\Controllers;

use Core\View;
use App\Models\mainPage;

class HomeController {
    public function index() {
        $detailPage = mainPage::find(1);
        return View::render(
            template:'home/index',
            layout: 'layout/general/main',
            data: [
                'meta_title' => $detailPage->meta_title,
                'meta_description' => $detailPage->meta_desc
            ]
        );
    }
}