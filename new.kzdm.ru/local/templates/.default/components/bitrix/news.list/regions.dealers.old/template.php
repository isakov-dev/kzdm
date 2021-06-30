<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="sale-dilers">
            <h2 class="h2 sales-widget__title">Дилеры и сервис </h2>
            <div class="sale-dilers__items">
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-3 col--md-4 ">
                            <div class="sale-dilers__item sale-dilers__item_offset">
                                <span class="sale-dilers__title"><?= $value['NAME']; ?></span>
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['ADDRESS'])): ?>
                                    <span class="sale-dilers__addr title title_large title_b-offset title_block"><?= $value['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['PHONE'])): ?>
                                    <a href="tel:<?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?>" class="sale-dilers__phone title title_small-offset"><?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?></a>
                                <?php endif; ?>
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['EMAIL'])): ?>
                                    <a href="mailto:<?= $value['DISPLAY_PROPERTIES']['EMAIL']['VALUE']; ?>" class="sale-dilers__mail title_block title title_large title_blue "><?= $value['DISPLAY_PROPERTIES']['EMAIL']['VALUE']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
