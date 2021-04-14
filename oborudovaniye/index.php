<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Оборудование');
$APPLICATION->SetPageProperty('title', 'Оборудование');
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:catalog",
    "equipment",
    array(
        "COMPONENT_TEMPLATE" => "equipment",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "19",
        "TEMPLATE_THEME" => "blue",
        "ADD_PICT_PROP" => "-",
        "LABEL_PROP" => array(
            0 => "USE",
            1 => "GAS",
            2 => "HOMEPAGE",
        ),
        "LIST_PROPERTY_CODE" => array(
            0 => "USE",
            1 => "GAS",
            2 => "HOMEPAGE",
            3 => "LESS_TEXT",
            4 => "BLUEPRINTS",
            5 => "PDF",
            6 => "SEASON",
            7 => "PRICE",
            8 => "MAIN_PROPS",
            9 => "PROPERTIES",
            10 => "VIDEO",
            11 => "FEATURES",
            12 => "GALLERY",
            13 => "RELIABILITY",
            14 => "ADVANTAGES",
            15 => "ADVANTAGES_IMG",
            16 => "H1_TITLE",
        ),
        "LABEL_PROP_MOBILE" => array(
        ),
        "LABEL_PROP_POSITION" => "top-left",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
        "MESS_BTN_COMPARE" => "Сравнение",
        "MESS_BTN_DETAIL" => "Подробнее",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "SIDEBAR_SECTION_SHOW" => "Y",
        "SIDEBAR_DETAIL_SHOW" => "N",
        "SIDEBAR_PATH" => "",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N",
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/oborudovaniye/",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "USE_MAIN_ELEMENT_SECTION" => "N",
        "DETAIL_STRICT_SECTION_CHECK" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "SET_TITLE" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "USE_FILTER" => "N",
        "FILTER_VIEW_MODE" => "VERTICAL",
        "FILTER_HIDE_ON_MOBILE" => "N",
        "INSTANT_RELOAD" => "N",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "USE_COMPARE" => "N",
        "PRICE_CODE" => array(
        ),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "BASKET_URL" => "/personal/basket.php",
        "USE_PRODUCT_QUANTITY" => "N",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "SEARCH_PAGE_RESULT_COUNT" => "50",
        "SEARCH_RESTART" => "N",
        "SEARCH_NO_WORD_LOGIC" => "Y",
        "SEARCH_USE_LANGUAGE_GUESS" => "Y",
        "SEARCH_CHECK_DATES" => "Y",
        "SHOW_TOP_ELEMENTS" => "Y",
        "TOP_ELEMENT_COUNT" => "9",
        "TOP_LINE_ELEMENT_COUNT" => "3",
        "TOP_ELEMENT_SORT_FIELD" => "sort",
        "TOP_ELEMENT_SORT_ORDER" => "asc",
        "TOP_ELEMENT_SORT_FIELD2" => "id",
        "TOP_ELEMENT_SORT_ORDER2" => "desc",
        "TOP_VIEW_MODE" => "SECTION",
        "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
        "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
        "TOP_ENLARGE_PRODUCT" => "STRICT",
        "TOP_SHOW_SLIDER" => "Y",
        "TOP_SLIDER_INTERVAL" => "3000",
        "TOP_SLIDER_PROGRESS" => "N",
        "SECTION_COUNT_ELEMENTS" => "Y",
        "SECTION_TOP_DEPTH" => "2",
        "SECTIONS_VIEW_MODE" => "LIST",
        "SECTIONS_SHOW_PARENT_NAME" => "Y",
        "PAGE_ELEMENT_COUNT" => "30",
        "LINE_ELEMENT_COUNT" => "3",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER2" => "desc",
        "INCLUDE_SUBSECTIONS" => "Y",
        "LIST_META_KEYWORDS" => "-",
        "LIST_META_DESCRIPTION" => "-",
        "LIST_BROWSER_TITLE" => "-",
        "SECTION_BACKGROUND_IMAGE" => "-",
        "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
        "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
        "LIST_ENLARGE_PRODUCT" => "STRICT",
        "LIST_SHOW_SLIDER" => "Y",
        "LIST_SLIDER_INTERVAL" => "3000",
        "LIST_SLIDER_PROGRESS" => "N",
        "DETAIL_META_KEYWORDS" => "-",
        "DETAIL_META_DESCRIPTION" => "-",
        "DETAIL_BROWSER_TITLE" => "-",
        "DETAIL_SET_CANONICAL_URL" => "N",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
        "DETAIL_BACKGROUND_IMAGE" => "-",
        "SHOW_DEACTIVATED" => "N",
        "DETAIL_USE_VOTE_RATING" => "N",
        "DETAIL_USE_COMMENTS" => "N",
        "DETAIL_BRAND_USE" => "N",
        "DETAIL_DISPLAY_NAME" => "Y",
        "DETAIL_IMAGE_RESOLUTION" => "16by9",
        "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
        "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
        "DETAIL_SHOW_SLIDER" => "N",
        "DETAIL_DETAIL_PICTURE_MODE" => array(
            0 => "POPUP",
            1 => "MAGNIFIER",
        ),
        "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
        "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
        "DETAIL_SHOW_POPULAR" => "Y",
        "DETAIL_SHOW_VIEWED" => "Y",
        "LINK_IBLOCK_TYPE" => "",
        "LINK_IBLOCK_ID" => "",
        "LINK_PROPERTY_SID" => "",
        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
        "USE_STORE" => "N",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Товары",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "LAZY_LOAD" => "N",
        "LOAD_ON_SCROLL" => "N",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "FILE_404" => "",
        "COMPATIBLE_MODE" => "N",
        "USE_ELEMENT_COUNTER" => "Y",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
        "SEF_URL_TEMPLATES" => array(
            "sections" => "/oborudovaniye/",
            "section" => "#SECTION_CODE_PATH#/",
            "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
            "compare" => "compare.php?action=#ACTION_CODE#",
            "smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
        ),
        "VARIABLE_ALIASES" => array(
            "compare" => array(
                "ACTION_CODE" => "action",
            ),
        ),
        'SECTION_USER_FIELDS' => [
            'UF_ICON_ID'
        ]
    ),
    false
);?>

<div class="section section_animated wow">
    <div class="wrapper wrapper_default">
        <div class="paragraph paragraph_middle">
            <h2>Применение навесного оборудования на спецтехнику</h2>

            <p>Коммунальная техника – это машины, которые стоят больших денег, но отказаться от них не получится. Предназначены они, чтобы содержать местность в чистоте – вывозить мусор, чистить тротуары и дороги, убирать снег в холодное время года. Это лишь несколько задач, с которыми такая техника успешно справляется. Стоят такие машины миллионы рублей, а если покупать отдельный вид техники для выполнения каждой задачи, недолго и разориться. Есть ли способ уменьшить необходимые затраты?</p>

            <p>Чтобы Вам не приходилось держать целый автопарк для поддержания территории в надлежащем состоянии, мы рекомендуем сделать выбор в пользу навесного оборудования для коммунальных машин. Навесное оборудование стоит значительно дешевле, но оно может устанавливаться на разные типы техники, что делает ее универсальной. Покупайте необходимую Вам машину и коммунальное навесное оборудование, что значительно расширит ее возможности.</p>

            <h2>О моделях навесного оборудования</h2>

            <p>Посетив сайт Кургандормаш, Вы увидите, что все навесное оборудование для спецтехники подразделяется на три категории – для КДМ, для ВПУМ и для мини-погрузчика. Вот, что сегодня компания может Вам предложить:</p>
            <ul style="padding-left: 30px">
                <li>щетки – предназначены для уборки территории от загрязнений разного рода;</li>
                <li>отвалы – они выполняют ландшафтные и грунтовые работы и используются для очистки территории от снега;</li>
                <li>ковши – это, пожалуй, основной тип навесного оборудования, и применяется он для перемещения грузов и подачи их на нужную высоту;</li>
                <li>вилы грузовые – используются для подъема грузов, что делает их лучшим средством для погрузки и разгрузки фур;</li>
                <li>грейдерные ножи – это коммунальное навесное оборудование хорошо подходит для выполнения строительных работ.</li>
            </ul>

            <p>Какое бы дополнение для коммунальной техники Вы ни решили приобрести, Вы легко отыщете его в ассортименте Кургандормаш.</p>

            <h2>Преимущества Кургандормаш</h2>

            <p>Конечно, это не единственный завод, который производит навесное оборудование для коммунальных машин. Но почему же стоит выбрать его продукцию? Сейчас разберемся.</p>
            <p>Во-первых, за ее качество. Компания работает с 1941 года, и за время существования она продолжала совершенствовать технологии производства и разрабатывать новые модели. Продукция Кургандормаш служит долгие годы без нареканий, и это уже успело проверить большое число покупателей.</p>
            <p>Во-вторых, за взаимоотношения с клиентами. Кургандормаш понимает, что покупка дорогостоящего оборудования – это дело серьезное, поэтому она старается сделать процесс приобретения комфортным для Вас. Специалисты компании готовы доставить покупку по адресу жительства покупателя, научить пользоваться им, а, при необходимости, переоборудовать машину.</p>
            <p>И это лишь несколько достоинств компании по сравнению с конкурентами!</p>

            <h2>Ответы на популярные вопросы</h2>

            <p>Покупатели нередко спрашивают нас, как будет проходить процесс покупки, и мы готовы рассказать Вам об этом прямо сейчас.</p>
            <ul style="padding-left: 30px">
                <li>
                    Нужно ли ехать за навесным оборудованием для спецтехники самому?<br>
                    Нет – мы доставим нужные Вам товары по указанному адресу удобным способом – тралом, собственным ходом, ж/д или водным транспортом.
                </li>
                <li>Что делать, если навесное оборудование для коммунальных машин сломалось?<br>
                    Необходимые запчасти для его ремонта Вы сможете купить у нас, потому что производятся они на заводе Кургандормаш.
                </li>
                <li>
                    Как подобрать навесное оборудование?<br>
                    Ориентируйтесь на то, с какими задачами оно должно справляться. И не забывайте, что оно должно подходить для Вашей техники.
                </li>
                <li>
                    Вы предоставляете гарантию на продукцию?<br>
                    Да, мы отвечаем за продукцию, потому что уверены в ее качестве и продолжительном сроке службы.
                </li>
            </ul>
        </div>
    </div>
</div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
