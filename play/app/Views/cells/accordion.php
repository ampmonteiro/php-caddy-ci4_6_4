<!-- app/Views/cells/accordion.php -->
<div class="accordion" id="<?= esc($id) ?>">
    <?php foreach ($items as $index => $item):
        $itemId = $id . '-item-' . $index;
    ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?= esc($itemId) ?>-header">
                <button class="accordion-button <?= $index ? 'collapsed' : '' ?>"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#<?= esc($itemId) ?>-body"
                    aria-expanded="<?= $index ? 'false' : 'true' ?>"
                    aria-controls="<?= esc($itemId) ?>-body">
                    <?= esc($item['header']) ?>
                </button>
            </h2>
            <div id="<?= esc($itemId) ?>-body"
                class="accordion-collapse collapse <?= $index ? '' : 'show' ?>"
                aria-labelledby="<?= esc($itemId) ?>-header"
                data-bs-parent="#<?= esc($id) ?>">
                <div class="accordion-body">
                    <?= esc($item['body']) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>