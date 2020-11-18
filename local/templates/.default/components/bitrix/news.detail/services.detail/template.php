<?php
$this->setFrameMode(true);
?>
<div class="single">
    <?php if (!empty($arResult)): ?>
        <?php if (!empty($arResult['DETAIL_PICTURE'])): ?>
            <div class="single-header" style="background-image: url('<?= resizeImage($arResult['DETAIL_PICTURE'], 1920, 560, BX_RESIZE_IMAGE_EXACT); ?>')">
        <?php else: ?>
            <div class="single-header single-header_gray">
        <?php endif; ?>
            <div class="single-header__content">
                <div class="wrapper wrapper_default">
                    <h1 class="h1 single__title"><?= $arResult['NAME']; ?></h1>
                    <?php if (!empty($arResult['DISPLAY_PROPERTIES']['LESS_TEXT'])): ?>
                        <div class="single__desc">
                            <p><?= $arResult['DISPLAY_PROPERTIES']['LESS_TEXT']['DISPLAY_VALUE']; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="top-nav top-nav_bordered stick-menu">
            <div class="wrapper wrapper_default">
                <div class="top-nav__content top-nav__content_def">
                    <?php if (!empty($arResult['PREV'])): ?>
                        <a href="<?= $arResult['PREV']['DETAIL_PAGE_URL']; ?>" class="iconed iconed_center top-nav__link">
                            <svg class="arrow-slim iconed__ico_r-default iconed__ico_reverce">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-r-slim"></use>
                            </svg>
                            <span class="title"><?= $arResult['PREV']['NAME']; ?></span>
                        </a>
                    <?php endif; ?>
                    <a href="<?= SITE_DIR; ?>servis/" class="iconed iconed_center top-nav__link top-nav__link_blue">
                        <svg class="hamburger  iconed__ico_r-small">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#hamburger"></use>
                        </svg>
                        <span class="title"><?= Bitrix\Main\Localization\Loc::getMessage('ALL_SERVICES'); ?></span>
                    </a>
                    <?php if (!empty($arResult['NEXT'])): ?>
                        <a href="<?= $arResult['NEXT']['DETAIL_PAGE_URL']; ?>" class="iconed iconed_center top-nav__link">
                            <span class="title"><?= $arResult['NEXT']['NAME']; ?></span>
                            <svg class="arrow-slim iconed__ico_l-default">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-r-slim"></use>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?if (($arResult['CODE'] == 'lizing' || $arResult['CODE'] == 'leasing')
            && file_exists($_SERVER['DOCUMENT_ROOT'] . '/apps/leasing-calc/app.php')) {?>
            <div class="wrapper wrapper_default">
                <div class="row">
                    <div class="col col--xl-10 col--xl-offset-1">
                        <?require($_SERVER['DOCUMENT_ROOT'] . '/apps/leasing-calc/app.php');?>
                    </div>
                </div>
            </div>
        <?}?>

        <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
            <?= $arResult['DETAIL_TEXT']; ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/blueform.php'); ?>
</div>
