<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated wow secton_default" id="catalog-section">
        <div class="wrapper wrapper_default">
            <div class="cars">
                <div class="row row_middle">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-6 col--xs-6">
                            <div class="car-article car-article_offset">
                                <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                    <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="car-article__img">
                                        <picture>
                                            <source media="(max-width: 991px)" srcset="<?= resizeImage($value['PREVIEW_PICTURE'], 467, 263); ?>">
                                            <source media="(max-width: 575px)" srcset="<?= resizeImage($value['PREVIEW_PICTURE'], 295, 197); ?>">
                                            <img src="<?= resizeImage($value['PREVIEW_PICTURE'], 884, 497); ?>" alt="<?= $value['NAME']; ?>">
                                        </picture>
                                    </a>
                                <?php endif; ?>
                                <div class="car-article__detail">
                                    <div class="car-article__header">
                                        <?php if (!empty($value['DISPLAY_PROPERTIES']['GAS'])): ?>
                                            <span class="sticker car-article__sticker" data-tippy-content="<?= Bitrix\Main\Localization\Loc::getMessage('WORK_ON_GAS'); ?>">
                                                <svg class="sticker-fire">
                                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fire-ico"></use>
                                                </svg>
                                            </span>
                                        <?php endif; ?>
                                        <?php if (!empty($value['DISPLAY_PROPERTIES']['USE'])): ?>
                                            <span class="car-article__city car-article__item title title_block title_large title_grey"><?= implode(' / ', $value['DISPLAY_PROPERTIES']['USE']['VALUE']); ?></span>
                                        <?php endif; ?>
                                        <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="h4 title title_block  car-article__title title_bold car-article__item"><?= $value['NAME']; ?></a>
                                    </div>
                                    <?php if(!empty($value['PREVIEW_TEXT'])): ?>
                                        <div class="car-article__desc title title_large match-height">
                                            <p><?= $value['PREVIEW_TEXT']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="more-widget">
                    <a href="<?= SITE_DIR; ?>catalog/" class="more-widget__link"><?= Bitrix\Main\Localization\Loc::getMessage('SEE_ALL'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
