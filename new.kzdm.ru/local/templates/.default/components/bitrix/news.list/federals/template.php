<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="sales sales-widget">
        <div class="row">
            <div class="col col--lg-7">
                <h2 class="h2 sales-widget__title"><?= Bitrix\Main\Localization\Loc::getMessage('PRESENT'); ?></h2>
                <div class="sales-map">
                    <div class="map-baloon map-baloon_r active" style="top: 72%;left:29%">
                        <span class="map-baloon__popover"><?= Bitrix\Main\Localization\Loc::getMessage('REGIONS_1'); ?></span>
                        <span class="map-baloon__center"></span>
                    </div>
                    <div class="map-baloon" style="top: 64%;left:19%;">
                        <span class="map-baloon__popover"><?= Bitrix\Main\Localization\Loc::getMessage('REGIONS_2'); ?></span>
                        <span class="map-baloon__center"></span>
                    </div>
                    <div class="map-baloon" style="top: 53%;left: 11%;">
                        <span class="map-baloon__popover"><?= Bitrix\Main\Localization\Loc::getMessage('REGIONS_3'); ?></span>
                        <span class="map-baloon__center"></span>
                    </div>
                    <div class="map-baloon map-baloon_b-r" style="top: 71%;left: 4%;">
                        <span class="map-baloon__popover"><?= Bitrix\Main\Localization\Loc::getMessage('REGIONS_4'); ?></span>
                        <span class="map-baloon__center"></span>
                    </div>
                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/map-sales.svg" alt="">
                </div>
            </div>
            <div class="col col--lg-4 col--lg-offset-1">
                <div class="sales-widget__items">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="sales-item sales-item-js<?= ($key === 0) ? ' active' : false; ?>">
                            <h4 class="h4 sales-item__title title title_micro-offset"><?= (SITE_ID == 'en') ? $value['DISPLAY_PROPERTIES']['TITLE_EN']['VALUE'] : $value['NAME']; ?></h4>
                            <?php if (!empty($value['DISPLAY_PROPERTIES']['ADDRESS'])): ?>
                                <p class="sales-item__addr title title_small-offset"><?= (SITE_ID == 'en') ? $value['DISPLAY_PROPERTIES']['ADDRESS_EN']['VALUE'] : $value['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($value['DISPLAY_PROPERTIES']['PHONE'])): ?>
                                <a href="tel:<?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?>" class="sales-item__phone h4 title title_medium title_small-offset title_block"><?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?></a>
                            <?php endif; ?>
                            <?php if (!empty($value['DISPLAY_PROPERTIES']['EMAIL'])): ?>
                                <a href="mailto:<?= $value['DISPLAY_PROPERTIES']['EMAIL']['VALUE']; ?>" class="title title_large title_blue"><?= $value['DISPLAY_PROPERTIES']['EMAIL']['VALUE']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
