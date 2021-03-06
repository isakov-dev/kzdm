<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated wow section_default" id="catalog-section">
        <div class="wrapper wrapper_default">
            <div class="cars">
                <h2 class="h2 title title_centered title_big-offset"><?= Bitrix\Main\Localization\Loc::getMessage('OTHER'); ?> <?= mb_strtolower($arResult['SECTION']['PATH'][0]['NAME']); ?></h2>
                <div class="row row_middle">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-6 col--sm-6">
                            <div class="car-article car-article_offset">
                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="car-article__img">
                                    <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                        <img src="<?= resizeImage($value['PREVIEW_PICTURE'], 871, 490); ?>" alt="<?= $value['NAME']; ?>">
                                    <?php else: ?>
                                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/no-image-871.jpg" alt="<?= $value['NAME']; ?>">
                                    <?php endif; ?>
                                </a>
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
                                        <div class="car-article__desc title title_large match-height" style="height: 38px;">
                                            <p><?= $value['PREVIEW_TEXT']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
