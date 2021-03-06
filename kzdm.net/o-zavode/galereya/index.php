<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Gallery');
$APPLICATION->SetPageProperty('title', 'Gallery');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        Для обеспечения бесперебойной работы специальной техники наших клиентов, осуществляет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "inner",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "about",
            "USE_EXT" => "N"
        )
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "about.gallery",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => "1062",
            "FIELD_CODE" => array("", ""),
            "IBLOCK_ID" => "43",
            "IBLOCK_TYPE" => "catalog_en",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array("", "IMAGES", ""),
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N"
        )
    );?>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
