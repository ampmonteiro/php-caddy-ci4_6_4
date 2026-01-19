<?= $this->extend('components/base') ?>


<?= $this->section('content') ?>
<h1 class="mb-4">Dashboard</h1>

<?php

use App\Cells\AccordionCell;
?>

<?= view_cell(
    AccordionCell::class,
    [
        'id'    => 'myAccordion',
        'items' => $items,
    ]
)
?>

<?= $this->endSection() ?>

<?php #$this->section('footer_js') 
?>

<?php # $this->endSection() 
?>