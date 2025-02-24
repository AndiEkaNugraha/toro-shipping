<?php
namespace App\Controllers;

use Core\View;
use App\Models\MetaPage;
use App\Models\Contact;

class HomeController {
    public function index() {
        $detailPage = MetaPage::find(1);
        $contact = Contact::findAll();
        return View::render(
            template:'home/index',
            layout: 'layout/general/main',
            data: [
                'meta_title' => $detailPage->meta_title,
                'meta_description' => $detailPage->meta_desc,
                'contact' => $contact
            ]
        );
    }
}