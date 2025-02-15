<?php

namespace App\Controllers;
use Core\View;
class AuthController{
    public function login() {
        return View::render(
            template:'auth/login/índex',
            layout: 'layout/auth/index'
        );
    }
}
