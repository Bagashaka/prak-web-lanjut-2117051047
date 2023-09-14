<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('user/profile/(:any)/(:any)/(:any)',[UserController::class,'profile']);

$routes->get('user/create',[UserController::class,'create']);

$routes->post('/user/store',[UserController::class, 'store']);