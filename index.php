<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Купить коммунальную технику, дорожные машины. Производство и продажа спецтехники в России!");
$APPLICATION->SetPageProperty('title', 'Купить коммунальную, уборочную технику: виды, цены, производство и продажа в России');
$APPLICATION->SetPageProperty('description', 'Поставки дорожно-уборочной техники для улиц напрямую от завода-производителя! 100% качество! Смотрите каталог дорожных машин на сайте!');
?><div class="index-video">
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

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/include/categories.php"); ?>

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
        "SET_META_KEYWORDST_META_KEYWORDS" => "N",
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

<?php
    $APPLICATION->IncludeComponent(
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
    "CACHE_TYPE" => "N",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
    0 => "",
    1 => "",
    ),
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
    "PROPERTY_CODE" => array(
    0 => "URL",
    1 => "MEDIA",
    2 => "",
    ),
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
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "homepage.advantages",
    "COMPOSITE_FRAME_MODE" => "A",
    "COMPOSITE_FRAME_TYPE" => "AUTO"
    ),
    false
    );
?>

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


<div class="homepage-about section section_animated wow secton_b-small">
    <div class="wrapper wrapper_default">
        <h2 class="homepage-about__title title_centered">Производим специальную технику с 1941 года.</h2>
        <div class="homepage-about__row row">
            <div class="col col--lg-5">
                <div class="paragraph paragraph_pt homepage-text">
                    <p>«Кургандормаш» уже более 80 лет выпускает качественную технику, прошедшую все
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
            <div class="col col--lg-6 col--lg-offset-1">
                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/hp_about-1.jpg'; ?>" alt="">
            </div>
        </div>
        <div class="homepage-about__row row">
            <div class="col">
                <h3 class="h3 title">Продажа коммунальной уборочной техники</h3>
                <div class="paragraph homepage-text">
                    <p>Коммунальная техника – это особый тип машин, который предназначен для поддержания чистоты и
                        порядка на улицах городов и общественных территориях. покупается она для решения разного рода
                        задач – это не только сухая уборка проезжих частей, площадей и тротуаров, как может показаться
                        сначала. С помощью коммунальной техники по всей России производится также влажная уборка дорог,
                        а в зимнее время машины используются в других целях – с их помощью пешеходные зоны посыпаются
                        специальными реагентами, а также помогают они и в ремонтных работах.</p>
                </div>
            </div>
        </div>
        <div class="homepage-about__row homepage-about__row_right row">
            <div class="col col--lg-6">
                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/hp_about-2.jpg'; ?>" alt="">
            </div>
            <div class="col col--lg-6">
                <h3 class="title">Области применения техники</h3>
                <div class="paragraph homepage-text">
                    <p>Важно, чтобы в городе было достаточно коммунальной техники для его уборки и поддержания
                        населенного пункта в надлежащем состоянии. Она применяется для уборки улиц и тротуаров,
                        для вывоза мусора и очистки выгребных ям, ливневой и канализационной сетей. Также нельзя
                        забывать и о дорожно-коммунальной технике, предназначенной для ремонта и строительства
                        новых проезжих частей.</p>
                    <p>Для содержания города в чистоте используется большое число машин, но в последнее время растет
                        популярность мини коммунальной техники. И неудивительно, ведь она занимает меньше места, а
                        значит, становится более маневренной по сравнению с аналогичными машинами. Используется
                        мини коммунальная техника для уборки тротуаров (они зачастую уже по ширине), а также для
                        работы на нешироких дорогах. Отличным решением станет мини уборочная техника и для
                        коммунального хозяйства, ведь полноразмерные машины там не нужны.</p>
                </div>
            </div>
        </div>
        <div class="homepage-about__row row">
            <div class="col">
                <h3 class="title">Виды коммунальной техники</h3>
                <div class="paragraph homepage-text">
                    <p>Конечно, для осуществления всего спектра работ используются разные виды коммунальной
                        техники, к которым относятся нижеприведенные типы машин:</p>
                    <ul>
                        <li><b>Коммунальная техника для уборки и мойки улиц. Сюда относятся подметально-уборочные
                                машины, снегоочистители, пескоразбрасывающее оборудование, а также дорожные косилки и
                                кусторезы.</b></li>
                        <li><b>Коммунальная техника для уборки тротуаров. Как правило, это малая коммунальная
                            техника, обеспечивающая те же функции, что и в предыдущем разделе. Она используется
                            для уборки парков, скверов, паркинга и т.д.</b></li>
                        <li><b>Мусоровозы. Если не купить эту коммунальную технику, чистоту в городе не обеспечить.</b></li>
                        <li><b>Дорожно-строительная техника. Эти типы машин предназначены для ремонтных работ
                                дорожного полотна, а также для строительства новых автодорог.</b></li>
                    </ul>
                    <p>Коммунальную технику легко найти в продаже у большого количества компаний, но лучше
                        работать напрямую с их производителем. Будьте уверены, что, если Вы выберете Курганский
                        завод коммунальной техники «Кургандормаш», то Вы не прогадаете.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section_animated wow secton_t-small">
    <div class="wrapper wrapper_default">
        <div class="h3 title title_big-offset">О преимуществах Кургандормаш</div>

        <div class="home-advantages">
            <?php
            $advs = [
                [
                    'img' => SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/adv-1.svg',
                    'name' => 'Колоссальный опыт',
                ],
                [
                    'img' => SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/adv-2.svg',
                    'name' => 'Доставка по всей стране',
                ],
                [
                    'img' => SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/adv-3.svg',
                    'name' => 'Клиентоориентированность',
                ],
                [
                    'img' => SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/adv-4.svg',
                    'name' => 'Компетентная консультация',
                ],
                [
                    'img' => SITE_DEFAULT_TEMPLATE_PATH . '/assets/images/adv-5.svg',
                    'name' => 'Техобслуживание с выездом',
                ],
            ];
            ?>
            <?php foreach ($advs as $adv) { ?>
                <div class="home-advantages__el">
                    <img src="<?= $adv['img']; ?>" alt="" class="home-advantages__el-img">
                    <div class="home-advantages__el-text"><?= $adv['name']; ?></div>
                </div>
            <?php } ?>
        </div>

        <div class="paragraph homepage-text">
            <p>Кургандормаш – это завод коммунальной техники, основанный еще в 1941 году. В это непростое время
                люди еще не предполагали, что их ждет впереди, но завод удалось не только основать, но и удержать
                в течение тяжелых военных лет. С тех пор прошло больше 80 лет, а Кургандормаш продолжает работать
                на благо страны, производя и продавая коммунальную технику.</p>
            <p>Доставляется коммунальная техника по всей России разными способами. Да, это одно из преимуществ
                компании перед другими. Если Вы решите совершить здесь покупку, Вам не придется думать о том, как
                ее забрать с завода. Кургандормаш предлагает транспортировать машину собственным ходом, с помощью
                трала, водного или железнодорожного транспорта – в зависимости от того, в какой город покупку
                нужно доставить.</p>
            <p>Показатель настоящей заботы о своих клиентах – это предоставление им дополнительных услуг.
                Кургандормаш способен на многое – если в каталоге продукции Вы не нашли необходимую для Ваших
                целей машину, не расстраивайтесь. В компании есть конструкторское бюро, где Вы можете заказать
                технику по собственному проекту и переоборудовать машину. К тому же, специалисты Кургандормаш
                научат Вас управлять машинами, проведут техобслуживание и сделают это даже с выездом по указанному
                адресу.</p>
        </div>
    </div>
</div>

<div class="homepage-questions section section_animated wow secton_t-small">
    <div class="wrapper wrapper_default">
        <div class="h3 title title_big-offset">Ответы на вопросы покупателей</div>

        <?php
        $qa = [
            [
                'q' => 'Я не уверен, что выбранная коммунальная техника подойдет для обозначенных целей. Как в этом 
                        убедиться?',
                'a' => 'Перед продажей коммунальной техники Кургандормаш предлагает потенциальным покупателям провести 
                        экскурсию, показать производство, качество техники и после этого уже примите решение.',
            ],
            [
                'q' => 'Я хочу использовать дополнительное оборудование на купленной машине. Это возможно?',
                'a' => 'В продукцию Кургандормаш могут быть внесены конструктивные изменения. Используйте то навесное 
                        оборудование, которое Вам необходимо.',
            ],
            [
                'q' => 'Должен ли я беспокоиться о доставке?',
                'a' => 'Сделав покупку в компании, Вам останется только ждать, когда ее доставят тралом, ж/д или 
                        водным транспортом, а также своим ходом.',
            ],
            [
                'q' => 'Что делать, если мне понадобятся запчасти?',
                'a' => 'Об этом тоже не стоит переживать – запчасти производятся на территории РФ, поэтому приобрести 
                        их не составит труда.',
            ],
        ];
        ?>

        <?php foreach ($qa as $item) { ?>
            <div class="homepage-questions__row">
                <div class="homepage-questions__q homepage-questions__el">
                    <div class="homepage-questions__el-inner">
                        <?= $item['q']; ?>
                    </div>
                </div>
                <div class="homepage-questions__a homepage-questions__el">
                    <div class="homepage-questions__el-inner">
                        <?= $item['a']; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>