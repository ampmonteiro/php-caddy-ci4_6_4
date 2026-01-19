<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->view('/welcome', 'welcome_message');
$routes->get('/', [Home::class,  'index']);

// $routes->get(
//     '/',
//     static fn() => 'Welcome Custom Routes'
// );
