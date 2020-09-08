<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['DISPLAY_PROPERTIES']['IMAGES'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row row_middle">
                <?php foreach ($arResult['DISPLAY_PROPERTIES']['IMAGES']['VALUE'] as $key => $value): ?>
                    <div class="col col--lg-4 col--md-6">
                        <a href="<?= resizeImage($value, 1920, 1080); ?>" data-fancybox="gallery" class="gallery-item gallery-item_offset">
                            <img src="<?= resizeImage($value, 568, 404); ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
