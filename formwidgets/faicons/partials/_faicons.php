<?php if ($this->previewMode): ?>

    <div class="form-control">
        <i class="icon-<?= $value ?>"></i> icon-<?= e($value) ?>
    </div>

<?php else: ?>

    <select id="<?= $this->getId('select') ?>" name="<?= $name ?>" class="form-control custom-select">
        <?php foreach ($this->getFaIcons() as $groupIcons) : ?>
        <optgroup label="<?= $groupIcons['name'] ?>">
            <?php foreach ($groupIcons['icons'] as $icon) {
                echo "<option data-icon='wn-icon-$icon' value='$icon'". ($icon==$value?'selected="selected"':'') .">$icon</option>";
            } ?>
        </optgroup>
        <?php endforeach; ?>
    </select>

<?php endif ?>
