<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="partner-sub">
        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
            <?php if (!empty($value['DISPLAY_PROPERTIES']['LOGO'])): ?>
                <div class="partner-sub__col">
                    <div class="partner-sub__item partner-sub__item_offset">
                        <img src="<?= resizeImage($value['DISPLAY_PROPERTIES']['LOGO']['FILE_VALUE'], 200, 120); ?>" alt="<?= $value['NAME']; ?>">
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
