<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Factory History');
$APPLICATION->SetPageProperty('title', 'Factory History');
?>
<div class="single">
    <div class="single-header" style="background-image: url('<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/history-bg.jpg')">
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
    <div class="section section_default section_animated wow stick-parent">
        <div class="wrapper wrapper_default">
            <div class="history-nav">
                <div class="row">
                    <div class="col col--xl-8 col--xl-offset-2">
                        <div class="row">
                            <div class="col col--md-6">
                                <a data-fancybox='gallery' href="/upload/attached/SamplePDFFile_5mb.pdf" class="history-link" style="background-image: url('<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/Perfect_Binding_Brochure_Mockup_3 1.png')">
                                    <span class="history-link__content">
                                        <span class="h3 history-link__title title title_block title_bold title_b-offset">Factory History Book</span>
                                        <span class="history-link__desc">
                                            The lowest price. All equipment is sold directly from the factory.
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col col--md-6">
                                <a href="<?= SITE_DIR; ?>o-zavode/galereya/" class="history-link" style="background-image: url('<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/history-circle.png')">
                                    <span class="history-link__content">
                                        <span class="h3 history-link__title title title_block title_bold title_b-offset">Gallery</span>
                                        <span class="history-link__desc">
                                            The lowest price. All equipment is sold directly from the factory.
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "about.history",
        Array(
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
            "IBLOCK_ID" => '46',
            "IBLOCK_TYPE" => "content_en",
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
            "PROPERTY_CODE" => array("YEAR",),
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
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
