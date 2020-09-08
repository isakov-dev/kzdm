<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('title', 'Производство коммунальной техники от завода АО "Кургандормаш"');
$APPLICATION->SetPageProperty('description', 'Завод дорожных машин в городе Кургане является производителем коммунальной техники с 1941 года! Входите на официальный сайт!');
?><div class="single">
	<div class="single-header" style="background-image: url('/upload/attached/about-bg.jpg')">
		<div class="single-header__content">
			<div class="wrapper wrapper_default">
				<h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
				<div class="single__desc">
					<p>
						 Сильная производственная база, колоссальный инженерный опыт, передовые технологии, неизменное качество выпускаемых машин, обеспечение поставок точно в срок, полная гарантия на каждую изготовленную машину — в лице Кургандормаша вы обретете стабильного, надежного партнера!
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
					АО «Кургандормаш» — машиностроительное предприятие, специализирующееся на производстве дорожно-строительной и коммунальной техники </h3>
					<div class="paragraph">
						<p>
							 Сильная производственная база, колоссальный инженерный опыт, передовые технологии, неизменное качество выпускаемых машин, обеспечение поставок точно в срок, полная гарантия на каждую изготовленную машину — в лице Кургандормаша вы обретете стабильного, надежного партнера!
						</p>
					</div>
					<div class="numb-preims box box_offset">
						<div class="row">
							<div class="col col--md-3 col--xs-6">
								<div class="numb-preim">
 <span class="numb-preim__title">50</span>
									<div class="numb-preim__desc">
										<p>
											 стран поставок спецтехники
										</p>
									</div>
								</div>
							</div>
							<div class="col col--md-3 col--xs-6">
								<div class="numb-preim">
 <span class="numb-preim__title">9</span>
									<div class="numb-preim__desc">
										<p>
											 видов производимой техники
										</p>
									</div>
								</div>
							</div>
							<div class="col col--md-3 col--xs-6">
								<div class="numb-preim">
 <span class="numb-preim__title">&gt;40</span>
									<div class="numb-preim__desc">
										<p>
											 машин производится ежемесячно
										</p>
									</div>
								</div>
							</div>
							<div class="col col--md-3 col--xs-6">
								<div class="numb-preim">
 <span class="numb-preim__title">45</span>
									<div class="numb-preim__desc">
										<p>
											 моделей машин в ассортименте
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="paragraph">
						<p>
							 В настоящее время завод отличается высокой технологической оснащенностью. В цехах установлено самое современное оборудование: запущена автоматическая установка вальцовки обечаек, что существенно сократило срок изготовления цистерн, сделаны серьезные вложения в компьютеризацию и программное обеспечение конструкторского и технологических отделов, смонтирована дробеструйная необитаемая камера очистки поверхностей, что значительно повышает стойкость лакокрасочного покрытия и как следствие продляет срок службы техники, установлен лазерраскрой листового металла и многое другое.
						</p>
						<p>
							 Территория завода увеличилась вдвое, пропорционально возросли и объемы работ: сегодня Кургандормаш выпускает порядка 500 единиц техники в год, В их числе — новейшие разработки, внедрение которых обусловлено пристальным вниманием к актуальным потребностям клиентов. В целом основу развития составляет создание систем комплексной механизации и автоматизации производственно-технологических процессов. Сильная производственная база, колоссальный инженерный опыт, передовые технологии, неизменное качество выпускаемых машин, обеспечение поставок точно в срок, полная гарантия на каждую изготовленную надстройку - в лице Кургандормаша вы обретете стабильного, надежного партнера.
						</p>
					</div>
					<div class="box box_offset">
						<div class="row">
							<div class="col col--lg-6">
								<h3 class="h3 title title_small-offset">Индивидуальный подход</h3>
								<p>
									 Гибко реагируем на пожелания заказчика и доработаем любую конструкцию из основной линейки под ваши требования в самые кротчайшие сроки. Также есть возможность установки импортной надстройки с последующей гарантией и сервисным сопровождением
								</p>
							</div>
							<div class="col col--lg-6">
								<h3 class="h3 title title_small-offset">Модернизация</h3>
								<p>
									 Кургандормаш непрерывно инвестирует в модернизацию продуктовой линейки иразработку новых образцов техники, соответствующей мировым стандартам
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
							<h2 class="h2 h2_white process__title process__title_big">470</h2>
							<p>
								 Высококвалифицированных <br>
								 специалистов на заводе
							</p>
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
            "IBLOCK_ID" => '10',
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
								<h2 class="h2 h2_white process__title title title_big-offset">География поставок</h2>
								<div class="geography__desc">
									<p>
										 Техника завода поставляется на регулярной основе в 17 стран мира
									</p>
								</div>
							</div>
							<div class="countires">
								<div class="countires__flags countires__flags_offset">
									<div class="flags">
 <span class="countires__flag"> <img src="/upload/attached/flag-1.png" alt=""> </span> <span class="countires__flag"> <img src="/upload/attached/flag-2.png" alt=""> </span> <span class="countires__flag"> <img src="/upload/attached/flag-3.png" alt=""> </span> <span class="countires__flag"> <img src="/upload/attached/flag-4.png" alt=""> </span>
									</div>
 <button class="countires__btn">
									17+ </button>
								</div>
								<div class="countires__desc">
									<p>
										 Россия, Казахстан, Китай, Польша, Турция, Армения, Ливия, Индия, Конго, Чили, Венесуэла, Нигерия и другие
									</p>
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
 <br>
								</p>
							</div>
						</div>
						<div class="col col--md-4">
							<div class="sert">
 <br>
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
 <a href="/catalog/" class="box-imagered box-imagered_offset" style="background-image: url('/upload/attached/box-1.jpg')"> <span class="box-imagered__content"> <span class="box-imagered__item"> <span class="box-imagered__numb">45</span> <span class="box-imagered__desc">
							<p>
								моделей машин в ассортименте
							</p>
 </span> </span> </span> </a>
						</div>
						<div class="col col--lg-6 col--sm-6">
 <a href="<?= SITE_DIR; ?>o-zavode/partnery/" class="box-imagered box-imagered_offset" style="background-image: url('/upload/attached/prestavitrlstvo.jpg')"> <span class="box-imagered__content"> <span class="box-imagered__item"> <span class="box-imagered__numb">4</span> <span class="box-imagered__desc">
							<p>
								официальных представительства
							</p>
 </span> </span> <span class="box-imagered__item"> <span class="box-imagered__numb">25</span> <span class="box-imagered__desc">
							<p>
								 дилерских<br>
								 центров
							</p>
 </span> </span> </span> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>