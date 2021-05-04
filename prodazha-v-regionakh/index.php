<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Продажа в регионах");
$APPLICATION->SetPageProperty('title', 'Продажа в регионах');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        <?=
                            DOMAIN_ZONE == 'kz' ? 'В подзаголовке изменить текст на: Официальные представительства АО
                        "Кургандормаш" есть в следующих городах Казахстана. Для удобства вы можете
                        связаться со специалистом в вашем регионе.' : 'Официальные представительства АО "Кургандормаш" есть во всех федеральных округах России. Для
                        удобства вы можете связаться со специалистом в вашем регионе.';
                        ?>
<!--                        Официальные представительства АО "Кургандормаш" есть во всех федеральных округах России. Для-->
<!--                        удобства вы можете связаться со специалистом в вашем регионе.-->
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
                <?if (DOMAIN_ZONE != 'kz') {?>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "federals.list",
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
                            "IBLOCK_ID" => "17",
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
                            "PROPERTY_CODE" => array("REGIONS", "ABBR", ''),
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
                <?}?>
                <div class="section section_default section_animated wow">
                    <div class="buy-preim">
                        <h2 class="h2 buy-preim__title sales-widget__title">Покупая технику у представительства вы
                            гарантированно получите</h2>
                        <div class="buy-preim__items">
                            <div class="row">
                                <div class="col col--lg-2 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">1.</span>
                                        <div class="num-item__desc">
                                            <p>
                                                Самую низкую цену. Вся техника продается на прямую с завода
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">2.</span>
                                        <div class="num-item__desc">
                                            <p>
                                                Кратчайшие сроки поставки и доставки спецтехники
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">3.</span>
                                        <div class="num-item__desc">
                                            <p>
                                                Бесплатное обучение и ввод спецтехники в эксплуатацию
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col--lg-2 col--lg-offset-1 col--sm-6">
                                    <div class="num-item num-item_offset">
                                        <span class="num-item__number">4.</span>
                                        <div class="num-item__desc">
                                            <p>
                                                Оперативное ответ на гарантийные обязательства и ускоренный сервис
                                            </p>
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
                                <div class="tile-imagered tile-imagered_large match-height"
                                     style="background-color: #0f3599;">
                                    <a href="/servis/obuchenie-i-obsluzhivanie/"
                                       class="tile-imagered__content tile-imagered__content_l"> <span
                                            class="tile-imagered__title tile-imagered__title title title_b-offset">
									Бесплатное обучение<br>
									 пользованию техникой </span>
                                        <p>
                                            Самую низкую цену. Вся техника<br>
                                            продается на прямую с завода
                                        </p>
                                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/half-logo.svg"
                                             class="tile-imagered__pic tile-imagered__pic__centered" alt=""> </a>
                                </div>
                            </div>
                            <div class="col col--lg-4 col--sm-6">
                                <a href="/servis/vyezdnoy-servis/"
                                   class="tile-imagered tile-imagered_large match-height"
                                   style="background-color: #0f3599;">
                                    <div class="tile-imagered__content tile-imagered__content_l">
 <span class="tile-imagered__title title title_b-offset">
									Бесплатный ввод<br>
									 в эксплуатацию </span>
                                        <p>
                                            Самую низкую цену
                                        </p>
                                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/baner-crop.png"
                                             class="tile-imagered__pic tile-imagered__pic_l" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col col--lg-4 col--sm-12">
                                <div class="tile-imagered tile-imagered_large match-height"
                                     style="background-color: #0f3599;">
                                    <a href="/dostavka/" class="tile-imagered__content tile-imagered__content_l"> <span
                                            class="tile-imagered__title title title_b-offset">
									Подробнее<br>
									 о доставке<br>
									 техники </span> <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/md.png"
                                                          class="tile-imagered__pic tile-imagered__pic_r-b" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/blueform.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>