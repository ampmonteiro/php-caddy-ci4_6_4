<?php

$fields = ['name', 'date_from', 'date_to'];

/**
 * A helper function to get the error message and CSS classes for each field.
 *
 * @param array $fields The fields to check for errors.
 * @param string $css_classes The CSS classes to apply if there is an error.
 * @return array<array{error:string,css_classes:string}> 
 * 
 * An associative array with field names as keys and arrays with 'error' and 'css_classes' as values.
 */
function fields_error_with(array $fields, string $css_classes): array
{
    return $fields
    |> (fn() => array_map('validation_show_error', $fields))
    |> (fn($msgs) => array_combine($fields, $msgs))
    |> (fn($vals) => array_map(
        fn($err) => ['error' => $err, 'css_classes' => $err ? $css_classes : ''],
        $vals
    ));
};

$errors = fields_error_with($fields, 'is-invalid');

$only_msg =  array_map(static fn($f) => $f['error'] ?? '', $errors);
$only_css = array_map(static fn($f) => $f['css_classes'] ?? '', $errors);

?>

<?= $this->extend('components/base') ?>
<?= $this->section('content') ?>
<?= form_open(url_to('form_submit')) ?>

<p class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text"
        value="<?= old('name') ?>"
        class="form-control <?= $only_css['name'] ?>"
        id="name"
        name="name">

    <?= $only_msg['name'] ?>
</p>
<p class="mb-3">
    <label for="date_from" class="form-label">Date From</label>
    <input type="date"
        value="<?= old('date_from') ?>"
        class="form-control <?= $only_css['date_from'] ?>"
        id="date_from" name="date_from">

    <?= $only_msg['date_from'] ?>
</p>

<p class="mb-3">
    <label for="date_to" class="form-label">Date To</label>
    <input type="date"
        value="<?= old('date_to') ?>"
        class="form-control <?= $only_css['date_to'] ?>"
        id="date_to" name="date_to">

    <?= $only_msg['date_to'] ?>
</p>

<button class="btn btn-primary">Submit</button>

<?= form_close() ?>
<?= $this->endSection() ?>