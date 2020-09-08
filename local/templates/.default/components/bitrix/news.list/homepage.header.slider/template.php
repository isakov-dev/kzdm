<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="slider-widget video__slider-widget">
        <div class="long-slider nice-load cu-dots">
            <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                <div>
                    <div class="long-slider__item">
                        <div class="long-slider__info">
                            <?php if (!empty($value['DISPLAY_PROPERTIES']['URL'])): ?>
                                <a href="<?= $value['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="h4 long-slider__title"><?= $value['NAME']; ?></a>
                            <?php else: ?>
                                <span class="h4 long-slider__title"><?= $value['NAME']; ?></span>
                            <?php endif; ?>
                            <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                <div class="long-slider__desc">
                                    <p><?= $value['PREVIEW_TEXT']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($value['DISPLAY_PROPERTIES']['URL']) && !empty($value['PREVIEW_PICTURE'])): ?>
                            <a href="<?= $value['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="long-slider__img" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 484, 160, BX_RESIZE_IMAGE_EXACT); ?>')"></a>
                        <?php elseif($value['PREVIEW_PICTURE']): ?>
                            <span class="long-slider__img" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 484, 160, BX_RESIZE_IMAGE_EXACT); ?>')"></span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
