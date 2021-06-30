<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Конфигуратор');
$APPLICATION->SetPageProperty('title', 'Конфигуратор');
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/select2.min.css');
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/configurator.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/select2.min.js');
\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/configurator.js');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
                <div class="single__desc">
                    <p>
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "page", 
                            "AREA_FILE_SUFFIX" => "inc", 
                            "AREA_FILE_RECURSIVE" => "Y", 
                            "EDIT_TEMPLATE" => "standard.php" 
                        )
                    );?>                       
                    </p>
                </div>
            </div>
        </div>
    </div>
	<div class="section section_animated wow secton_default">
		<div class="wrapper wrapper_default">
			<div class="configurator-wrapper">
				<div class="filter">
				<?$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "configurator.filter", Array(
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DISPLAY_ELEMENT_COUNT" => "N",	// Показывать количество
		"FILTER_NAME" => "arrFilter",	// Имя выходящего массива для фильтрации
		"FILTER_VIEW_MODE" => "vertical",	// Вид отображения
		"IBLOCK_ID" => getIblockIdByCode("config-technika"),	// Инфоблок
		"IBLOCK_TYPE" => "configurator",	// Тип инфоблока
		"PAGER_PARAMS_NAME" => "arrPager",	// Имя массива с переменными для построения ссылок в постраничной навигации
		"PREFILTER_NAME" => "smartPreFilter",	// Имя входящего массива для дополнительной фильтрации элементов
		"SAVE_IN_SESSION" => "N",	// Сохранять установки фильтра в сессии пользователя
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_DESCRIPTION" => "-",	// Описание
		"SECTION_ID" => "",	// ID раздела инфоблока
		"SECTION_TITLE" => "-",	// Заголовок
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"XML_EXPORT" => "N",	// Включить поддержку Яндекс Островов
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"POPUP_POSITION" => "left",	// Позиция для отображения всплывающего блока с информацией о фильтрации
	),
	false
);?>
				</div>
				<?if ($_REQUEST['AJAX_FILTER']=="Y") {
	$APPLICATION->RestartBuffer();
	
}?>
				<div class="car" id='ajax_configurator_block'>
				
<?$APPLICATION->IncludeComponent("bitrix:news.list", "configurator.technika", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => getIblockIdByCode("config-technika"),	// Код информационного блока
		"IBLOCK_TYPE" => "configurator",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "200",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "GRUZOPOD",
			1 => "POWER",
			2 => "VOLUME",
			3 => "PESOK",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	
				
				</div>
				<?if ($_REQUEST['AJAX_FILTER']=="Y") {
	die();
}?>
		
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>