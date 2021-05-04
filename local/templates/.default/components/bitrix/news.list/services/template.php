<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="service">
                <div class="row">
                    <div class="col col--xl-8 col--xl-offset-2">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <?php
                                if($value['ID'] != 79 && DOMAIN_ZONE == 'kz') {
                            ?>
                            <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="service-tile service-tile_offset">
                                <span class="service-tile__content">
                                    <span class="service-tile__title h3 title title_block title_small-offset"><?= $value['NAME']; ?></span>
                                    <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                        <span class="service-tile__desc"><?= $value['PREVIEW_TEXT']; ?></span>
                                    <?php endif; ?>
                                </span>
                                <span class="circle-arrow">
                                    <svg height="124" width="124" class="circle-arrow__line">
                                        <circle cx="60" cy="60" r="59" stroke-width="1" fill="none" />
                                    </svg>
                                    <svg class="circle-arrow__ico">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-r-slim"></use>
                                    </svg>
                                </span>
                            </a>
                            <?php } else if(DOMAIN_ZONE != 'kz') { ?>
                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="service-tile service-tile_offset">
                            <span class="service-tile__content">
                                <span class="service-tile__title h3 title title_block title_small-offset"><?= $value['NAME']; ?></span>
                                <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                    <span class="service-tile__desc"><?= $value['PREVIEW_TEXT']; ?></span>
                                <?php endif; ?>
                            </span>
                                    <span class="circle-arrow">
                                <svg height="124" width="124" class="circle-arrow__line">
                                    <circle cx="60" cy="60" r="59" stroke-width="1" fill="none" />
                                </svg>
                                <svg class="circle-arrow__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-r-slim"></use>
                                </svg>
                            </span>
                                </a>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
