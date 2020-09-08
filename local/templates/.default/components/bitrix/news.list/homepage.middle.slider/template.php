<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="full section section_animated wow">
        <div class="full__info">
            <div class="wrapper wrapper_default">
                <div class="full-widget">
                    <div class="homepage-middle-slider">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <div class="homepage-middle-slider__content<?= $key == 0 ? ' active' : false; ?>" data-id="<?= $value['ID']; ?>">
                                <h3 class="h3 h3_d-offset title title_heavy full__title"><?= $value['NAME']; ?></h3>
                                <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                    <div class="full__desc title title_large"><?= $value['PREVIEW_TEXT']; ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="full-widget-nav">
                        <div class="full-widget-nav__header">
                            <div class="full-counter">
                                <span class="full-counter__current"></span>
                                <span class="full-counter__sep">/</span>
                                <span class="full-counter__all"></span>
                            </div>
                            <div class="full-nav">
                                <button class="full-nav__arrow full-nav__arrow_prev">
                                    <svg class="arrow-left-ico">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-left-ico"></use>
                                    </svg>
                                </button>
                                <button class="full-nav__arrow full-nav__arrow_next">
                                    <svg class="arrow-right-ico">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-right-ico"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="slider-progress">
                            <div class="progress"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-slider">
            <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                <div class="full-slider__item" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 1920, 1080, BX_RESIZE_IMAGE_EXACT); ?>')" data-id="<?= $value['ID']; ?>"></div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
