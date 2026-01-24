<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class CardCell extends Cell
{
    // These properties are filled automatically by view_cell()
    public string $title = 'Default Title';
    public string $bodyPath = '';
    public array $data = [];
    public string $color = 'primary';
    public string $text = 'Default text';

    private string $slot;

    // Specify the base layout for this cell
    protected string $view =  APPPATH . 'Views/cells/base-card.php';

    /**
     * Computed Property: 'slot'
     * In the view, you access this as $slot.
     */
    public function getSlotProperty(): string
    {
        // Simply return the view string; CI4 handles the rendering
        return $this->bodyPath ?  view($this->bodyPath, $this->data) : '';
    }
}
