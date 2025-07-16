<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Users;
use App\Controllers\Apis;
use App\Controllers\News;
use App\Controllers\Ajax;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);

$routes->get('ajax/get/(:segment)', 'Ajax::get/$1');

$routes->get('apis/wikipedia', 'Apis::wikipedia');

$routes->get('home', [Pages::class, 'index']);

$routes->get('(:segment)', [Pages::class, 'view']);
 
$routes->get('user/login/(:segment)', [Users::class, 'login']);
$routes->get('user/logout/', [Users::class, 'logout']);