<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['DISPLAY_PROPERTIES']['IMAGES'])): ?>
    <div class="work-widget">
        <div class="work-widget__nav">
            <div class="wrapper wrapper_default">
                <div class="work-widget__arrows">
                    <a href="#" class="work-widget__arrow work-widget__arrow_left work-left">
                        <svg class="work-arrow work-arrow-left">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-left-ico"></use>
                        </svg>
                    </a>
                    <a href="#" class="work-widget__arrow work-widget__arrow_right work-right">
                        <svg class="work-arrow work-arrow-right">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-right-ico"></use>
                        </svg>
                        <svg viewBox="0 0 36 36" class="circular-chart" data-speed="5000">
                            <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="work-slider slider">
            <?php foreach ($arResult['DISPLAY_PROPERTIES']['IMAGES']['VALUE'] as $key => $value): ?>
                <div>
                    <div class="work-slider__item">
                        <img class="work-slider__pic" src="<?= resizeImage($value, 1172, 640, BX_RESIZE_IMAGE_EXACT); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
