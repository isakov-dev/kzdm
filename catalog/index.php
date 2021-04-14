<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Каталог выпускаемой спецтехники');
$APPLICATION->SetPageProperty('title', 'Дорожно-уборочная техника. Каталог спецтехники для уборки и ремонта дорог!');
$APPLICATION->SetPageProperty('description', 'Производство и продажа дорожных машин по РФ и странам СНГ от производителя! Каталог коммунальной и дорожной техники - смотрите на сайте!');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"catalog", 
	array(
		"COMPONENT_TEMPLATE" => "catalog",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
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
			17 => "DESC_IMAGES",
			18 => "ADDITIONAL_SPEC",
			19 => "YOUTUBE",
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
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_FILTER" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"INSTANT_RELOAD" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_COMPARE" => "Y",
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
		"SECTION_USER_FIELDS" => array(
			0 => "UF_ICON_ID",
			1 => "UF_ICON",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"COMPARE_POSITION_FIXED" => "Y",
		"COMPARE_POSITION" => "top left",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "/catalog/",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>

    <div class="section section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="paragraph paragraph_middle">
                <h2>Дорожная спецтехника – комплектация и применение</h2>

                <p>Первые дороги появились еще во времена существования праславян, в тысячных годах до нашей эры. Конечно, тогда они представляли собой не то, что мы называем дорогами сегодня. Первые же асфальтовые покрытия в нашей стране появились в 1866 году, но активно развиваться асфальтовые сети стали уже с 1920-х годов. В эти времена работы уже проводились не вручную, а с использованием дорожно-строительной техники.</p>
                <p>Что же происходит сегодня? Дорожная сеть продолжает расширяться, а старые покрытия активно ремонтируются с помощью дорожной спецтехники. Сегодня техника для дорожного строительства применяется для разных целей. Как правило, при укладке покрытия приходится выполнять множество работ, и за каждую из них отвечает своя машина. Конечно, покупать все их сразу необходимости нет – комплектацию и функциональность их можно менять. На большинство машин можно монтировать навесное оборудование, предназначенное для нужных Вам работ. Так Вы и деньги сэкономите, и место в автопарке.</p>
                <p>Дорожно-строительная техника – это не только машины для постройки и ремонта проезжей части в городах и за их пределами. Также она используется для возведения зданий промышленного и частного назначения, и для этого тоже есть свои типы спецтехники.</p>

                <h2>Виды дорожно-строительной техники</h2>

                <p>Список типов дорожно-строительной техники включает в себя несколько категорий спецтехники для строительных работ. Все они выполняют свои функции:</p>
                <ol>
                    <li>Подготовительные работы – подготовка территории к строительству обеспечивается кусторезами, корчевателями и рыхлителями.</li>
                    <li>Землеройные функции – бульдозеры, экскаваторы, скреперы и грейдеры отвечают за работу с грунтом.</li>
                    <li>Укладка и обслуживание дорог – фрезы, катки и асфальтоукладчики используются при ремонте дорог.</li>
                    <li>Производство и перевозка бетонных смесей – за это отвечают бетоносмесители, автобетоносмесители, автоцементовозы и бетононасосы.</li>
                    <li>Дробление и сортировка пород – для этого предназначены дробилки и грохоты.</li>
                    <li>Строительство искусственных сооружений – для свайных работ используются паровые и дизель-молоты, вибромолоты и вибропогружатели.</li>
                    <li>Разработка карьеров и обогащение материалов – эти функции выполняются специальными погрузчиками, а также машинами для промывки, сортировки и дробления каменных материалов.</li>
                    <li>Грузоподъемность – краны и специальные установки обеспечат перемещение грузов.</li>
                    <li>Непрерывная транспортировка – конвейеры, пневматические и гидравлические транспортирующие установки обеспечат непрерывную подачу необходимых материалов.</li>
                </ol>


                <h2>Преимущества покупки дорожно-строительной техники в Кургандормаш</h2>

                <p>Производством дорожно-строительной техники в России занимаются несколько заводов. Так почему же стоит обратиться именно в Кургандормаш? Он был основан в 1941 году, и за время своего существования успел пережить многое. Тем не менее и до сих пор он работает на благо России, предлагая большой выбор спецтехники и дорожно-строительной техники. Среди спецтехники и дорожной техники Вы найдете подметально-уборочные машины, мини-погрузчики, автогудронаторы, чипсилеры, комбинированные дорожные машины, снегопогрузчики и прочую технику – специальную, дорожную, строительную.</p>
                <p>Большой ассортимент техники – это не единственное достоинство Кургандормаш. Среди них можно также выделить возможность лизинга. При продаже дорожной спецтехники завод предлагает услуга лизинга от Сбербанка, Минпромторга, Балтийского лизинга и Элемент лизинга. При продаже дорожно-строительной техники специалисты подберут выгодные условия от понравившейся Вам компании.</p>
                <p>Транспортные средства и строительно-дорожная техника – это не единственное, что продает компания. Нет, здесь можно купить не только дорожную технику, но также и оборудование для нее. В каталоге на официальном сайте завода Вы также найдете навесное оборудование для КДМ, ВПУМ и мини-погрузчиков.</p>
                <p>Еще одно преимущество компании перед конкурентами – это возможность работы на заказ. Не нашли подходящей машины в каталоге на сайте? В Кургандормаш работает конструкторское бюро, которое готово выполнить Ваши требования и создать машину для особых целей. Расскажите, что Вам нужно, а специалисты легко воплотят Ваши мечты в жизнь.</p>

                <h2>Вопрос-ответ</h2>
                <p>Компания часто сталкивается с вопросами от своих покупателей на разные темы. На самые популярные из них она готова ответить прямо сейчас.</p>
                <ol>
                    <li>
                        Можно ли протестировать дорожную спецтехнику перед покупкой? <br>
                        Да, такая возможность есть. Оформите заявку на тест-драйв и посмотрите, как машины справляются со своими обязанностями.
                    </li>
                    <li>
                        Что делать, если нужно монтировать дополнительное оборудование?<br>
                        Кургандормаш понимает, что функции купленной машины хочется расширить, поэтому продает дорожно-строительную технику, на которую можно установить навесное оборудование.
                    </li>
                    <li>
                        Как получить спецтехнику для дорожных работ?<br>
                        Для этого Вам не придется добираться до завода самостоятельно. Кургандормаш транспортирует Вашу покупку удобным способом.
                    </li>
                    <li>
                        Как купить запчасти для дорожно-строительной техники?<br>
                        Если Вам понадобятся запасные части, проблем с этим не возникнет. Завод располагается на территории России, и заказ доставят быстро.
                    </li>
                </ol>
            </div>
        </div>
    </div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>