<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="partner-tiles">
        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
            <div class="partner-tile">
                <div class="partner-tile__img" style="background-color: <?= $value['DISPLAY_PROPERTIES']['BG_COLOR']['VALUE']; ?>;">
                    <img class="partner-tile__pic svg" src="<?= $value['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE']['SRC']; ?>" alt="<?= $value['NAME']; ?>">
                </div>
                <div class="partner-tile__content">
                    <span class="h3 title title_medium title_b-offset title_block partner-tile__title"><?= $value['NAME']; ?></span>
                    <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                        <p><?= $value['PREVIEW_TEXT']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
