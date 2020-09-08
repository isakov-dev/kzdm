<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])):
    $first = array_shift($arResult['ITEMS']);
    ?>
    <div class="section section_animated wow secton_default">
        <div class="wrapper wrapper_default">
            <div class="sales">
                <div class="row">
                    <div class="col col--lg-6">
                        <a href="<?= $first['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="sale sale-video sale_shadow sale_big " style="background-image:url('<?= resizeImage($first['PREVIEW_PICTURE'], 872, 800); ?>')">
                            <span class="sale__pic" style="background-image: url('<?= resizeImage($first['PREVIEW_PICTURE'], 872, 800); ?>')"></span>
                            <?php if (!empty($first['DISPLAY_PROPERTIES']['MEDIA'])): ?>
                                <video muted class="sale__video">
                                    <source src="<?= $first['DISPLAY_PROPERTIES']['MEDIA']['FILE_VALUE']['SRC']; ?>" type="video/mp4">
                                </video>
                            <?php endif; ?>
                            <span class="sale__content">
                                <span class="sale__header">
                                    <span class="sale__cat"><?= Bitrix\Main\Localization\Loc::getMessage('ADVANTAGES_BLOC_TITLE'); ?></span>
                                    <h3 class="h3 title title_white sale__title"><?= $first['NAME']; ?></h3>
                                </span>
                                <span class="arrow-link arrow-link_white sale__arrow-link iconed iconed_center">
                                    <span class="arrow-link__title"><?= $first['DISPLAY_PROPERTIES']['URL']['DESCRIPTION']; ?></span>
                                    <svg class="arrow-link-ico iconed__ico">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-link-ico"></use>
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col col--lg-6">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <?php if ($key + 1 !== count($arResult['ITEMS'])): ?>
                                <a href="<?= $value['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="sale sale-map sale_small sale_offset" style="">
                                    <span class="sale__pic" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 872, 380); ?>')"></span>
                                    <span class="sale-map__item" style="background-image:url('<?= resizeImage($value['PREVIEW_PICTURE'], 872, 380); ?>')"></span>
                                    <span id="index-map" class="index-map_edited"></span>
                                    <span class="sale__content">
                                    <span class="sale__header">
                                        <span class="sale__cat"><?= Bitrix\Main\Localization\Loc::getMessage('ADVANTAGES_BLOC_TITLE'); ?></span>
                                        <h3 class="h3 title  sale__title"><?= $value['NAME']; ?></h3>
                                    </span>
                                    <span class="arrow-link arrow-link_orange sale__arrow-link iconed iconed_center">
                                        <span class="arrow-link__title"><?= $value['DISPLAY_PROPERTIES']['URL']['DESCRIPTION']; ?></span>
                                        <svg class="arrow-link-ico iconed__ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-link-ico"></use>
                                        </svg>
                                    </span>
                                    <span class="sale-map-baloon">
                                        <img class="sale-map-baloon__ico" src="<?= $value['DISPLAY_PROPERTIES']['MEDIA']['FILE_VALUE']['SRC']; ?>" alt="">
                                    </span>
                                </span>
                                </a>
                            <?php else: ?>
                                <a href="<?= $value['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="sale sale-ipad sale_small " style="background: #17181A;">
                                    <span class="sale__pic" style="background-image: url('<?= $value['DISPLAY_PROPERTIES']['MEDIA']['FILE_VALUE']['SRC']; ?>'); background-color: #17181A;"></span>
                                    <span class="sale-ipad__img">
                                        <img src="<?= $value['DISPLAY_PROPERTIES']['MEDIA']['FILE_VALUE']['SRC']; ?>" alt="">
                                    </span>
                                    <span class="sale__content">
                                        <span class="sale__header">
                                            <span class="sale__cat sale__cat_white"><?= Bitrix\Main\Localization\Loc::getMessage('ADVANTAGES_BLOC_TITLE'); ?></span>
                                            <h3 class="h3 title title_white sale__title"><?= $value['NAME']; ?></h3>
                                        </span>
                                        <span class="arrow-link arrow-link_orange sale__arrow-link iconed iconed_center">
                                            <span class="arrow-link__title"><?= $value['DISPLAY_PROPERTIES']['URL']['DESCRIPTION']; ?></span>
                                            <svg class="arrow-link-ico iconed__ico">
                                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-link-ico"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
