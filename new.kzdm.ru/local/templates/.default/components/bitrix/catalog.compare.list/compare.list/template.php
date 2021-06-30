<?php
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/custom-scroll.css');
?>
<?php if (!empty($arResult)): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="compare-widget">
                <div class=" compare__item compare-widget__aside">
                    <div class="compare__header match-height"></div>
                    <?php if (!empty($arResult['COMPARE_TYPES'])): ?>
                        <div class="compare__content">
                            <?php foreach ($arResult['COMPARE_TYPES'] as $key => $value): ?>
                                <div class="compare-section">
                                    <h3 class="compare-section__title"><?= $value['SECT_TITLE']; ?></h3>
                                    <?php if (!empty($value['VALUES'])): ?>
                                        <div class="compare-lines">
                                            <?php foreach ($value['VALUES'] as $item): ?>
                                                <div class="compare-line"><?= $item['NAME']; ?></div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php unset($arResult['COMPARE_TYPES']); ?>
                    <?php endif; ?>
                </div>
                <div class="compared-scroll custom-scroll-x ">
                    <div class="compare-list">
                        <?php foreach ($arResult as $key => $value): ?>
                            <div class=" compare__item">
                                <div class="compare__header match-height">
                                    <div class="compare__car">
                                        <button type="button" class="compare__remove remove-from-compare" data-url="<?= SITE_DIR; ?>remove-from-compare/" data-iblock-id="<?= $value['IBLOCK_ID']; ?>" data-id="<?= $value['ID']; ?>"></button>
                                        <img class="compare__img" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 320, BX_RESIZE_IMAGE_EXACT); ?>" alt="">
                                        <?php if (!empty($value['PROPERTIES']['USE']['VALUE'])): ?>
                                            <span class="car-article__city car-article__item title title_block title_large title_grey"><?= implode(' / ', $value['PROPERTIES']['USE']['VALUE']); ?></span>
                                        <?php endif; ?>
                                        <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="h4 title title_block  car-article__title title_bold car-article__item"><?= $value['NAME']; ?></a>
                                    </div>
                                </div>
                                <div class="compare__content">
                                    <?php foreach ($value['PR'] as $index => $item): ?>
                                        <div class="compare-section">
                                            <div class="compare-lines">
                                                <?php foreach ($item['VALUES'] as $val): ?>
                                                    <div class="compare-line compare-line_gray"><?= $val['VALUE']; ?></div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
