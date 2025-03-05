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
$router->add('GET', $metaPage[1]->seo_page, 'ServiceController@index');

$router->add('GET', 'administrator', 'AuthController@index');
$router->add('GET', 'administrator/login', 'AuthController@login');
$router->add('POST', 'administrator/login', 'AuthController@store');
$router->add('GET', 'administrator/{user_seo}/logout', 'AuthController@destroy');

$router->add('GET', 'administrator/{user_seo}/seo-page', 'Admin\SeoPageController@index',['auth']);
$router->add('GET', 'administrator/{user_seo}/seo-page/{id}', 'Admin\SeoPageController@detail', ['auth']);
$router->add('POST', 'administrator/{user_seo}/seo-page/{id}', 'Admin\SeoPageController@update', ['auth']);

$router->add('GET', 'administrator/{user_seo}', 'Admin\DashboardController@index',['auth']);
$router->add('GET', 'administrator/{user_seo}/contact', 'Admin\ContactController@index',['auth']);
$router->add('POST', 'administrator/{user_seo}/contact', 'Admin\ContactController@update',['auth']);

$router->add('GET', 'administrator/{user_seo}/faq', 'Admin\FaqController@index',['auth']);
$router->add('POST', 'administrator/{user_seo}/faq', 'Admin\FaqController@delete',['auth']);
$router->add('GET', 'administrator/{user_seo}/faq/create', 'Admin\FaqController@create',['auth']);
$router->add('POST', 'administrator/{user_seo}/faq/create', 'Admin\FaqController@insert',['auth']);
$router->add('GET', 'administrator/{user_seo}/faq/{id}', 'Admin\FaqController@detail',['auth']);
$router->add('POST', 'administrator/{user_seo}/faq/{id}', 'Admin\FaqController@update',['auth']);

$router->add('GET', 'administrator/{user_seo}/services', 'Admin\ServicesController@index',['auth']);
$router->add('GET', 'administrator/{user_seo}/services/create', 'Admin\ServicesController@create',['auth']);
$router->add('POST', 'administrator/{user_seo}/services/create', 'Admin\ServicesController@insert',['auth']);