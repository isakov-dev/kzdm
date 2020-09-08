<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Купить коммунальную технику, дорожные машины. Производство и продажа спецтехники в России!");
$APPLICATION->SetPageProperty('title', 'Купить коммунальную технику, дорожные машины. Производство и продажа спецтехники в России!');
$APPLICATION->SetPageProperty('description', 'Поставки дорожно-коммунальной техники для уборки улиц напрямую от завода-производителя! 100% качество! Смотрите каталог дорожных машин на сайте!');
?>

<div class="index-video">
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "homepage.header.video",
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
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "sliders",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "1",
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
            "PROPERTY_CODE" => array("VIDEO", "H1"),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    ); ?>

    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "homepage.header.slider",
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
            "IBLOCK_ID" => "2",
            "IBLOCK_TYPE" => "sliders",
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
            "PROPERTY_CODE" => array("URL", ""),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    ); ?>
</div>

<?php
global $homepageGoodsFilter;
$homepageGoodsFilter = ['!PROPERTY_HOMEPAGE' => false];
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "homepage.goods",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "Y",
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
        "FILTER_NAME" => "homepageGoodsFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => '1',
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "6",
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
        "PROPERTY_CODE" => array("USE", "GAS", 'HOMEPAGE'),
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
    "homepage.middle.slider",
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
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "sliders",
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
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "homepage.advantages",
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
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
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
        "PROPERTY_CODE" => array("URL", "MEDIA"),
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
    "homepage.news",
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
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
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
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>

<? $APPLICATION->IncludeComponent(
    "sunmedia:forms",
    "blueform.homepage",
    array(
        "CACHE_TYPE" => "N",
        "EVENT_NAME" => "NEW_CONSULT",
        "FIELDS" => ['PHONE' => ['TYPE' => 'TEL', 'REQUIRED' => false,],],
        "FORM_ID" => "consult",
        "IBLOCK_ID" => 27
    )
); ?>

<div class="section section_animated wow secton_default">
    <div class="wrapper wrapper_default">
        <div class="row">
            <div class="col col--lg-10 col--lg-offset-1">
                <div class="about-widget">
                    <h4 class="h4 about-widget__title title title_small-offset">Производим специальную технику с
                        1941 года</h4>
                    <div class="toggler about-widget__content">
                        <div class="paragraph paragraph_middle homepage-text">
                            <p>«Кургандормаш» уже более 75 лет выпускает качественную технику, прошедшую все
                                испытания и
                                отвечающую современным потребительским запросам и требованиям безопасности,
                                благодаря
                                чему имеет популярность и спрос. Оригинальная качественная техника компании
                                "Кургандормаш" продается только напрямую с завода или через авторизованную дилерскую
                                сеть, гарантирующую подлинность товара, обеспечивающую полную предпродажную
                                подготовку и
                                послепродажное обслуживание. </p>
                            <p>В коллективе работают высококвалифицированные конструктора и технологи, опытные
                                токари,
                                сварщики, фрезеровщики. Высокое качество выпускаемых машин и безупречный сервис
                                служат
                                главным фактором привлечения покупателей и основой благополучия работников
                                предприятия.</p>
                            <p>Сильная производственная база, колоссальный инженерный опыт, передовые технологии,
                                неизменное качество выпускаемых машин, обеспечение поставок точно в срок, полная
                                гарантия на каждую изготовленную машину. В лице Кургандормаша вы обретете
                                стабильного,
                                надежного партнера!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>