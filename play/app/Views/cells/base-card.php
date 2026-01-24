<div class="card shadow-sm mb-4">
    <div class="card-header bg-<?= $color ?> text-white">
        <h5 class="card-title mb-0"><?= esc($title) ?></h5>
    </div>
    <div class="card-body">
        <?php if ($slot): ?>
            <?= $slot ?>
        <?php else: ?>
            <?= $text ?>
        <?php endif ?>
    </div>
</div>