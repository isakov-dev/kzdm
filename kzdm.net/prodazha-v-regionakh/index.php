<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Selling in the regions');
$APPLICATION->SetPageProperty('title', 'Selling in the regions');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        To ensure the smooth operation of the special equipment of our customers
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_default section_last section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="single">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "federals",
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
                        "IBLOCK_ID" => '17',
                        "IBLOCK_TYPE" => "regions",
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
                        "PROPERTY_CODE" => array("ADDRESS", "PHONE", 'EMAIL', 'TITLE_EN', 'ADDRESS_EN'),
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
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "federals.list",
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
                        "IBLOCK_ID" => '17',
                        "IBLOCK_TYPE" => "regions",
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
                        "PROPERTY_CODE" => array("REGIONS", "ABBR", 'ABBR_EN'),
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
                <div class="section section_default section_animated wow">
                    <div class="buy-preim">
                        <h2 class="h2 buy-preim__title sales-widget__title">Buying equipment from a representative office you are guaranteed to receive</h2>
                        <div class="buy-preim__items">
                            <div class="row">
                                <div class="col col--lg-2 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">1.</span>
                                        <div class="num-item__desc">
                                            <p>The lowest price. All equipment is sold directly from the factory.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">2.</span>
                                        <div class="num-item__desc">
                                            <p>Shortest delivery times and deadlines</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">3.</span>
                                        <div class="num-item__desc">
                                            <p>Free training and commissioning of special equipment</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">4.</span>
                                        <div class="num-item__desc">
                                            <p>Prompt response to warranty and expedited service</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section_default section_animated wow">
                    <div class="sales-baners">
                        <div class="row">
                            <div class="col col--lg-4 col--sm-6">
                                <div class="tile-imagered tile-imagered_large match-height" style="background-color: rgb(15, 53, 153);">
                                    <a href="<?= SITE_DIR; ?>servis/obuchenie-i-obsluzhivanie/" class="tile-imagered__content tile-imagered__content_l">
                                        <span class="tile-imagered__title tile-imagered__title title title_b-offset">
                                            Free training<br>on using equipment
                                        </span>
                                        <p>
                                            The lowest price. All equipment<br> is sold directly from the factory
                                        </p>
                                        <img class="tile-imagered__pic tile-imagered__pic__centered" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/half-logo.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col col--lg-4 col--sm-6">
                                <a href="<?= SITE_DIR; ?>servis/vyezdnoy-servis/" class="tile-imagered tile-imagered_large match-height" style="background-color: rgb(15, 53, 153);">
                                    <div class="tile-imagered__content tile-imagered__content_l">
                                        <span class="tile-imagered__title title title_b-offset">
                                            Free commissioning<br> operation
                                        </span>
                                        <p>Lowest price</p>
                                        <img class="tile-imagered__pic tile-imagered__pic_l" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/baner-crop.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col col--lg-4 col--sm-12">
                                <div class="tile-imagered tile-imagered_large match-height" style="background-color: rgb(15, 53, 153);">
                                    <a href="<?= SITE_DIR; ?>dostavka/" class="tile-imagered__content tile-imagered__content_l">
                                        <span class="tile-imagered__title title title_b-offset">
                                            More information about the delivery of equipment
                                        </span>
                                        <img class="tile-imagered__pic tile-imagered__pic_r-b" src="<?=SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/md.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? /*$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "regions.dealers",
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
                        "IBLOCK_ID" => '45',
                        "IBLOCK_TYPE" => "content",
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
                );*/ ?>
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/blueform.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
