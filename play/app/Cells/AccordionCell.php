<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AccordionCell extends Cell
{
    public $id;
    public $items = [];

    public function __invoke(): string
    {
        return view('cells/accordion');
    }
}
