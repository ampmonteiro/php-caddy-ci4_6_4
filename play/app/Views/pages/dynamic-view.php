<?= $this->extend('components/base') ?>


<?= $this->section('content') ?>
<h1 class="mb-4">Smart View VS Cell view</h1>

<h2>Cell view </h2>
<?=
view_cell(
    App\Cells\CardCell::class,
    [
        'title'    => 'Card Info',
        'color'    => 'info',
        'bodyPath' => 'components/card-info'
    ]
)
?>

<h2>Smart views </h2>

<p>Child view without data</p>
<?=
smart_view(
    'cells/base-card',
    slot: 'components/card-info',
    title: $title,
    color: 'primary'
)
?>

<p>Child view with data</p>
<?=
smart_view(
    'cells/base-card',
    slot: 'components/card-generic',
    slotData: [
        'my_text' => 'This is some dynamic text for the first paragraph.',
        'text_2'  => 'Here is additional dynamic text for the second paragraph.'
    ],
    title: $title,
    color: 'success'
)
?>

<p>Simple text only</p>
<?=
smart_view(
    'cells/base-card',
    text: 'just simple text danger card',
    title: 'Card Danger',
    color: 'danger'
)
?>

<?=
smart_view(
    'cells/base-card',
    text: 'hi muted card',
    title: 'Card Muted',
    color: 'muted'
)
?>

<?= $this->endSection() ?>