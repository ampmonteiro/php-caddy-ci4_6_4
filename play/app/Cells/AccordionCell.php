<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AccordionCell extends Cell
{
    public $id;
    public $items = [];
    // Force CI to use app/Views/cells/accordion.php
    protected string $view =  APPPATH . 'Views/cells/accordion.php';
}
