<?php

use App\Cells\AccordionCell; ?>

<?= $this->extend('components/base') ?>


<?= $this->section('content') ?>
<h1 class="mb-4">Accordion Cells</h1>
<!-- 
< view_cell(
    AccordionCell::class,
    [
        'id'    => 'myAccordion',
        'items' => $items,
    ]
)
?> -->
<?= view_cell(AccordionCell::class, ['id' => 'my-acc', 'items' => $items]) ?>
<?= $this->endSection() ?>

<?php #$this->section('footer_js') 
?>

<?php # $this->endSection() 
?>