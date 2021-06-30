<?php
$this->setFrameMode(true);
?>
<?php
if($arResult['ID'] == 79 && DOMAIN_ZONE == 'kz') {
    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404","Y");
    require(\Bitrix\Main\Application::getDocumentRoot() . "/404.php");
    die();
}
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

            <div class="leasing-banner wrapper wrapper_default">
                <div class="row">
                    <div class="col col--xl-10 col--xl-offset-1">
                        <div class="row">
                            <div class="col col--md-6">
                                <div class="h3 title">Позвоните нам!</div>
                                <p>И мы максимально оперативно и компетентно поможем вам оформить договор льготного лизинга</p>
                            </div>
                            <div class="leasing-banner__right col col--md-5 col--md-offset-1">
                                <a href="tel:<?=str_replace(' ', '', PHONE)?>" class="leasing-banner__phone">
                                    <?=PHONE?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper_default">
                <div class="row">
                    <div class="col col--xl-10 col--xl-offset-1">
                        <?require($_SERVER['DOCUMENT_ROOT'] . '/apps/leasing-calc/app.php');?>
                    </div>
                </div>
            </div>

            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/leasing-content.php'); ?>
        <?}?>

        <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
            <?= $arResult['DETAIL_TEXT']; ?>
        <?php endif; ?>
                <?php
                    if(DOMAIN_ZONE == 'kz' && ($arResult['ID'] == 81 || $arResult['ID'] == 78 || $arResult['ID'] == 80)) {
                ?>
                    <div class="wrapper wrapper_default">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        (DOMAIN_ZONE == 'kz' ? "federals-kz" : "federals"),
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => (DOMAIN_ZONE == 'kz' ? "61" : "17"),
                            "IBLOCK_TYPE" => (DOMAIN_ZONE == 'regions_kz' ? "61" : "regions"),
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("ADDRESS", "PHONE", 'EMAIL'),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "DESC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                    </div>
                <?php } ?>
    <?php endif; ?>
    <?php
        if(DOMAIN_ZONE == 'kz') { ?>
            <style>
                .kz-display-none {
                    display: none;
                }
            </style>
        <?php } ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/blueform.php'); ?>
</div>
