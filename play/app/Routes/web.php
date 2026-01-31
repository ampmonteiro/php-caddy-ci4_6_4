<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Say;

/**
 * @var RouteCollection $routes
 */

// a custom Approach, where the routes are grouped
// and defined in the controller
$routes->group(
    '',
    fn() => Pages::setRoutes(routes: $routes)
);

// // $routes->get('/', [Pages::class,  'index']);

$routes->get('/say', Say::class, ['as' => 'say_json']);

$routes->view('/welcome', 'welcome/index', ['as' => 'original']);

$routes->view('/table', 'pages/table', ['as' => 'table']);

$routes->get(
    '/arrow',
    static fn() => 'Welcome Custom Routes'
);
