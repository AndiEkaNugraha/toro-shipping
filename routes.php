<?php
/**
 * @var Core\Router $router
 */

use App\Middlewares\Auth;
use App\Middlewares\CSRF;
use App\Middlewares\View;
use App\Models\mainPage;

$mainPage = mainPage::findAll();

$router->addGlobalMiddleware(View::class);
$router->addGlobalMiddleware(CSRF::class);
$router->addRouteMiddleware('auth', Auth::class);

$router->add('GET', $mainPage[0]->seo_page, 'HomeController@index');

$router->add('GET', 'administrator/login', 'AuthController@login');
$router->add('POST', 'administrator/login', 'AuthController@store');

$router->add('GET', 'administrator/{user_seo}', 'Admin\DashboardController@index',['auth']);