<?php

namespace App\Controllers;
use Core\View;
use App\Services\Auth;
use Core\Router;
class AuthController{
    public function login() {
        return View::render(
            template:'auth/login/índex',
            layout: 'layout/auth/index'
        );
    }
    public function store() {
        //To do CSRF

        $email =  $_POST['email'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']) ? (bool)$_POST['remember'] : false;
        // Attempt auth
        if (Auth::attempt($email, $password, $remember)) {
            Router::redirect('/administrator/'. Auth::user()->seo_name);
        }
        return View::render(
            template:'auth/login/índex', 
            data:['error'=> 'Password or Email is incorrect'],
            layout: 'layout/auth/index'
        ); 
    }
}
