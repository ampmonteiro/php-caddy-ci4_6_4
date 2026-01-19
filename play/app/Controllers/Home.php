<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {

        $items = [
            ['header' => 'Item 1', 'body' => 'First body'],
            ['header' => 'Item 2', 'body' => 'Second body'],
        ];

        return view(
            'home/index',
            compact('items')
        );
    }
}
