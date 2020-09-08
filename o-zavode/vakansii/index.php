<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Вакансии");
$APPLICATION->SetPageProperty('title', 'Вакансии');
?><div class="single">
	<div class="single-header single-header_gray">
		<div class="single-header__content">
			<div class="wrapper wrapper_default">
				<h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
				<div class="single__desc">
					<p>
						 Если вы хотите стать частью сильного предприятия, предлагаем рассмотреть предложенные нами ваканссии
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
	<div class="section section_default section_last section_animated wow">
		<div class="wrapper wrapper_default">
			<div class="single">
				<div class="row">
					<div class="col col--xl-8 col--xl-offset-2">
						<div class="vacances">
							<div class="vacancy__tiles vacancy__tiles_offset">
								<div class="row">
									<div class="col col--lg-6">
 <a href="https://kurgan.zarplata.ru/companies/20569641" class="tile-imagered tile-imagered_dark match-height" style="background-color: #EEF1F4" target="_blank"> <span class="tile-imagered__content"> <span class="tile-imagered__title">Все актуальные вакансии смотрите на зарплата.ру</span> <span class="tile-imagered__site"> <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/zarplata.png" alt=""> </span> <span class="btn btn_submit btn_box btn_orange">Перейти на сайт</span> </span> <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/man-worker.png" class="tile-imagered__pic tile-imagered__pic_man tile-imagered__pic_offset" alt=""> </a>
									</div>
									<div class="col col--lg-6">
										<div class="tile-imagered match-height" style="background-color: #0F3599">
											<div class="tile-imagered__content tile-imagered__content_l">
 <span class="tile-imagered__title">Если у вас нет аккаунта</span>
												<p>
													 Если у вас нет аккаунта на зарплата.ру, вы можете позвонить на <a href="tel:+73522443620">+7 (352) 244-36-20</a> или написать на почту <a href="mailto:ivanova_ia@kzdm.ru">ivanova_ia@kzdm.ru</a>
												</p>
 <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/half-logo.svg" class="tile-imagered__pic" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"vacancies",
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
		"FIELD_CODE" => array("DETAIL_TEXT",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "24",
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
		"PROPERTY_CODE" => array("PAY","WORK"),
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
);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>