<?php

use App\Cells\CardCell;

?>

<?= $this->extend('components/base') ?>


<?= $this->section('content') ?>
<h1 class="mb-4">Dynamic Cards Cell</h1>

<?=
view_cell(
    CardCell::class,
    [
        'title'    => 'Card Primary',
        'bodyPath' => 'components/card-detail'
    ]
)
?>

<?=
view_cell(
    CardCell::class,
    [
        'title'    => 'Card Info',
        'color'    => 'info',
        'bodyPath' => 'components/card-info'
    ]
)
?>

<?=
view_cell(
    CardCell::class,
    [
        'title' => 'Card Danger',
        'color' => 'danger',
        'text'  => 'just simple text'
    ]
)
?>

<?=
view_cell(
    CardCell::class,
    [
        'title'    => 'Card Muted',
        'color'    => 'secondary'
    ]
)
?>

<?= $this->endSection() ?>