<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Contacts');
$APPLICATION->SetPageProperty('title', 'Contacts');

\Bitrix\Main\Page\Asset::getInstance()->addJs('https://api-maps.yandex.ru/2.1/?lang=en_US&amp', true);
?>
<script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.430765351045466,65.261313894165],
            zoom: 17
        });
        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(new ymaps.Placemark([55.430765351045466,65.261313894165], {}, {
            iconColor: '#ed4543'
        }));
    }
</script>
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
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="contacts-tiles contacts-tiles_offset">
                <div class="row">
                    <div class="col col--lg-3">
                        <div class="contacts-tile contacts-tile_offset">
                            <h3 class="h3 contacts-tile__title title title__middle-offset">Corporate contacts</h3>
                            <a href="mailto:omis@kzdm.ru" class="title contacts-tile__mail title_block title_blue title title_middle-offset">omis@kzdm.ru</a>
                            <a href="tel:88003509580" class="contacts-tile__phone h4 title title_block title_small-offset">8 800 350 95 80</a>
                            <span class="title contacts-tile__job">Hot line</span>
                        </div>
                    </div>
                    <div class="col col--lg-3">
                        <div class="contacts-tile contacts-tile_offset">
                            <h3 class="h3 contacts-tile__title title title_middle-offset">Moscow office</h3>
                            <a href="tel:84951289927" class="contacts-tile__phone h4 title title_block title_small-offset">8 495 128 99 27</a>
                            <span class="title contacts-tile__job">Presnenskaya emb. 8, Moscow, Russian Federation, 123317</span>
                        </div>
                    </div>
                    <div class="col col--lg-3">
                        <div class="contacts-tile contacts-tile_offset">
                            <h3 class="h3 contacts-tile__title title title_middle-offset">Kurgan office</h3>
                            <a href="tel:83522443620" class="contacts-tile__phone h4 title title_block title_small-offset">8 3522 44 36 20</a>
                            <span class="title contacts-tile__job">Avtozavodskaya 1A, Kurgan, Russian Federation, 640008</span>
                        </div>
                    </div>
                    <div class="col col--lg-3">
                        <a href="/upload/attached/SamplePDFFile_5mb.pdf" class="doc-company iconed iconed_center" download>
                            <img class="iconed__ico doc-company__ico iconed__ico_r-default" src="/upload/attached/doc-company.svg" alt="">
                            <span class="doc-company__title title_m">Download details, PDF</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="map-widget">
                <div class="row">
                    <div class="col col--lg-8">
                        <div id="map" class="contacts-map"></div>
                    </div>
                    <div class="col col--lg-4">
                        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'feedback', [
                            'IBLOCK_ID' => 25,
                            'EVENT_NAME' => 'NEW_FEEDBACK',
                            'FIELDS' => [
                                'NAME' => [
                                    'TYPE' => 'TEXT',
                                    'REQUIRED' => false,
                                ],
                                'EMAIL' => [
                                    'TYPE' => 'EMAIL',
                                    'REQUIRED' => false,
                                ],
                                'MESSAGE' => [
                                    'TYPE' => 'TEXTAREA',
                                    'REQUIRED' => false,
                                ]
                            ]
                        ], false); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "contacts.staff",
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
            "IBLOCK_ID" => '12',
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
            "PROPERTY_CODE" => array("POST", "PHONE"),
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
