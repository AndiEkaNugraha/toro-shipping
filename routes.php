<?php
/**
 * @var Core\Router $router
 */

use App\Middlewares\Auth;
use App\Middlewares\CSRF;
use App\Middlewares\View;
use App\Models\MetaPage;

$metaPage = MetaPage::findAll();

$router->addGlobalMiddleware(View::class);
$router->addGlobalMiddleware(CSRF::class);
$router->addRouteMiddleware('auth', Auth::class);

$router->add('GET', $metaPage[0]->seo_page, 'HomeController@index');

$router->add('GET', 'administrator/login', 'AuthController@login');
$router->add('POST', 'administrator/login', 'AuthController@store');
$router->add('GET', 'administrator/{user_seo}/logout', 'AuthController@destroy');

$router->add('GET', 'administrator/{user_seo}', 'Admin\DashboardController@index',['auth']);
$router->add('GET', 'administrator/{user_seo}/contact', 'Admin\ContactController@index',['auth']);
$router->add('POST', 'administrator/{user_seo}/contact', 'Admin\ContactController@update',['auth']);