<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Router\RouteCollection;

class Pages extends BaseController
{

    public static function setRoutes(RouteCollection $routes): void
    {
        $routes->get(
            '/',
            [static::class, 'index'],
            ['as' => 'page_index']
        );

        $routes->get(
            '/about',
            [static::class, 'about'],
            ['as' => 'page_about']
        );

        $routes->get(
            '/card',
            [static::class, 'card'],
            ['as' => 'page_card']
        );

        $routes->get(
            'dynamic-view',
            [static::class, 'dynamicView'],
            ['as' => 'page_dynamic_view']
        );
    }


    public function index(): string
    {
        $items = [
            ['header' => 'Item 1', 'body' => 'First body'],
            ['header' => 'Item 2', 'body' => 'Second body'],
        ];

        return view(
            'pages/index',
            compact('items')
        );
    }

    public function about(): string
    {
        return view(
            'pages/about',
        );
    }

    public function card(): string
    {
        return view('pages/card');
    }

    public function dynamicView(): string
    {
        $base_title = 'Dynamic Smart View Card Title';

        return view('pages/dynamic-view', compact('base_title'));
    }
}
