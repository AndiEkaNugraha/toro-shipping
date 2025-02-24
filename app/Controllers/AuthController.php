<?php

namespace App\Controllers;
use Core\View;
use App\Services\Auth;
use Core\Router;
class AuthController{
    public function login() {
        if (isset($_SESSION['error']) && $_SESSION['error'] != null) {
            $error = "Password or Email is incorrect";
            $_SESSION['error'] = null;
            return View::render(
                template:'auth/login/índex',
                layout: 'layout/auth/index',
                data: [
                    'error' => $error
                ]
            );
        } else {
            return View::render(
                template:'auth/login/índex',
                layout: 'layout/auth/index'
            );
        }
    }

    public function destroy($user_seo) {
        Auth::logout();
        Router::redirect('/');
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
        $_SESSION['error'] = 'Password or Email is incorrect';
        Router::redirect('/administrator/login');
    }
}
