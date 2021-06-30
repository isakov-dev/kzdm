<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('About the factory');
$APPLICATION->SetPageProperty('title', 'About the factory');
?>
<div class="single">
    <div class="single-header" style="background-image: url('/upload/attached/about-bg.jpg')">
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
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--xl-6 col--xl-offset-3">
                    <h3 class="h3 title title_middle-offset">
                        JSC "Kurgandormash" is a machine-building enterprise specializing in the production of road-building and municipal equipment.
                    </h3>
                    <div class="paragraph">
                        <p>
                            A strong production base, colossal engineering experience, advanced technologies, consistent quality of manufactured machines, ensuring deliveries on time, a full guarantee for each manufactured machine - in the person of Kurgandormash you will find a stable, reliable partner!
                        </p>
                    </div>
                    <div class="numb-preims box box_offset">
                        <div class="row">
                            <div class="col col--md-3 col--xs-6">
                                <div class="numb-preim">
                                    <span class="numb-preim__title">50</span>
                                    <div class="numb-preim__desc"><p>countries of supply of special equipment</p></div>
                                </div>
                            </div>
                            <div class="col col--md-3 col--xs-6">
                                <div class="numb-preim">
                                    <span class="numb-preim__title">9</span>
                                    <div class="numb-preim__desc"><p>types of manufactured equipment</p></div>
                                </div>
                            </div>
                            <div class="col col--md-3 col--xs-6">
                                <div class="numb-preim">
                                    <span class="numb-preim__title">>40</span>
                                    <div class="numb-preim__desc"><p>cars are produced monthly</p></div>
                                </div>
                            </div>
                            <div class="col col--md-3 col--xs-6">
                                <div class="numb-preim">
                                    <span class="numb-preim__title">45</span>
                                    <div class="numb-preim__desc"><p>car models in assortment</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paragraph">
                        <p>
                            At present, the plant is distinguished by high technological equipment. The workshops installed the most modern equipment: an automatic installation for rolling shells was launched, which significantly reduced the production time of tanks, serious investments were made in computerization and software of the design and technological departments, an uninhabited shot blasting chamber for cleaning surfaces was installed, which significantly increases the durability of the paintwork and, as a result, prolongs the service life of the equipment, installed laser cut sheet metal and more.
                        </p>
                        <p>
                            The territory of the plant has doubled, and the volume of work has proportionally increased: today Kurgandormash produces about 500 units of equipment per year, including the latest developments, the introduction of which is due to close attention to the actual needs of customers. In general, the development is based on the creation of systems for complex mechanization and automation of production and technological processes. A strong production base, colossal engineering experience, advanced technologies, consistent quality of manufactured machines, ensuring deliveries on time, a full guarantee for each manufactured superstructure - in the person of Kurgandormash you will find a stable, reliable partner.
                        </p>
                    </div>
                    <div class="box box_offset">
                        <div class="row">
                            <div class="col col--lg-6">
                                <h3 class="h3 title title_small-offset">Individual approach</h3>
                                <p>
                                    We respond flexibly to the wishes of the customer and we will modify any design from the main line to your requirements in the shortest possible time. It is also possible to install an imported add-on with subsequent warranty and service support.
                                </p>
                            </div>
                            <div class="col col--lg-6">
                                <h3 class="h3 title title_small-offset">Modernization</h3>
                                <p>
                                    Kurgandormash continuously invests in the modernization of the product line and the development of new types of equipment that meet international standards
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_default section_animated wow">
        <div class="process baner_imagered">
            <img src="/upload/attached/about-section.jpg" alt="">
            <div class="process__content">
                <div class="row">
                    <div class="col col--lg-10 col--lg-offset-1">
                        <div class="wrapper wrapper_default">
                            <h2 class="h2  h2_white process__title process__title_big">385</h2>
                            <p>workers in<br> the factory</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $GLOBALS['vipFilter'] = [
        '!PROPERTY_VIP' => false
    ];
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "about.partners",
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
            "FILTER_NAME" => "vipFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => '42',
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
            "PROPERTY_CODE" => array("IMG", "BG_COLOR"),
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

    <div class="section section_default section_gray section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="geography">
                <div class="row row__stretch">
                    <div class="col col--lg-4">
                        <div class="geography__aside">
                            <div class="geography__info">
                                <h2 class="h2 h2_white process__title title title_big-offset">Geography of supplies 
                               </h2>
                                <div class="geography__desc">
                                    <p>The plant's equipment is supplied on a regular basis to 17 countries of the world</p>
                                </div>
                            </div>
                            <div class="countires">
                                <div class="countires__flags countires__flags_offset">
                                    <div class="flags">
                                        <span class="countires__flag">
                                            <img src="/upload/attached/flag-1.png" alt="">
                                        </span>
                                        <span class="countires__flag">
                                            <img src="/upload/attached/flag-2.png" alt="">
                                        </span>
                                        <span class="countires__flag">
                                            <img src="/upload/attached/flag-3.png" alt="">
                                        </span>
                                        <span class="countires__flag">
                                            <img src="/upload/attached/flag-4.png" alt="">
                                        </span>
                                    </div>
                                    <button class="countires__btn">
                                        15+
                                    </button>
                                </div>
                                <div class="countires__desc">
                                    <p>Russia, Kazakhstan, China, Poland, Turkey, Armenia, Libya, India, Congo, Chile, Venezuela, Nigeria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col--lg-8">
                        <div class="map-light">
                            <img src="/upload/attached/map-light.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--xl-6 col--xl-offset-3">
                    <div class="row">
                        <div class="col col--md-8">
                            <div class="paragraph">
                                <p>
                                    The FAUN sweeper is capable of cleaning any complexity: a sweeper for daily tasks, an airfield sweeper for keeping runways clean, or just a maneuverable solution for small areas. FAUN integrates a unique air recirculation system that feeds the intake air from the hopper to the suction unit, so that dirty exhaust air and dust clouds do not appear in the work area. The circulating air is heated, preventing water from freezing in the suction shaft and reservoirs, which allows the machine to be operated at subzero temperatures. Thanks to the Silent Plus option, the noise level of the engine and blower system is significantly reduced by up to 99 dB. The V-shaped suction unit also improves suction performance and reduces wear: only one brush strip needs to be replaced, which is also more affordable. The equipment includes: a garbage bin, a system for suction and supply of an estimate to the bunker, an autonomous engine for driving all working bodies, a water tank, a humidification system, a central brush, one or two suction units in the side overhangs of the machine, a hydraulic system, and a pneumatic system.
                                </p>
                            </div>
                        </div>
                        <div class="col col--md-4">
                            <div class="sert">
                                <img class="sert__img" src="/upload/attached/mark.png" alt="">
                                <p>
                                    The company is certified in the quality system ISO 9001-2015
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--xl-8 col--xl-offset-2">
                    <div class="row row_large">
                        <div class="col col--lg-6 col--sm-6">
                            <a href="/catalog/" class="box-imagered box-imagered_offset" style="background-image: url('/upload/attached/box-1.jpg')">
                                <span class="box-imagered__content">
                                    <span class="box-imagered__item">
                                        <span class="box-imagered__numb">45</span>
                                        <span class="box-imagered__desc"><p>car models in assortment</p></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col col--lg-6 col--sm-6">
                            <a href="<?= SITE_DIR; ?>o-zavode/partnery/" class="box-imagered box-imagered_offset" style="background-image: url('/upload/attached/prestavitrlstvo.jpg')">
                                <span class="box-imagered__content">
                                    <span class="box-imagered__item">
                                        <span class="box-imagered__numb">4</span>
                                        <span class="box-imagered__desc"><p>official representatives</p></span>
                                    </span>
                                    <span class="box-imagered__item">
                                        <span class="box-imagered__numb">25</span>
                                        <span class="box-imagered__desc"><p>dealerships</p></span>
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

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
