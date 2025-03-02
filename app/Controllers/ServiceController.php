<?php

namespace App\Controllers;

use Core\View;
use App\Models\MetaPage;

class ServiceController {
    public function index() {
        $meta = MetaPage::find(2);
        $menu = MetaPage::findAll();
        return View::render(
            template:'service/index',
            layout: 'layout/general/main',
            data: [
                'meta_title' => $meta->meta_title,
                'meta_description' => $meta->meta_desc
            ]
        );
    }
}