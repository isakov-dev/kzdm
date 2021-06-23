<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
        <a data-fancybox data-type="ajax" data-src="/ajax/video-popup.php" href="javascript:;" class="index-video__mobile">
            <link rel="preload" as="image" href="<?= resizeImage($value['PREVIEW_PICTURE'], 545, 308, BX_RESIZE_IMAGE_EXACT); ?>">
            <picture>
                <source media="(max-width: 575px)" srcset="<?= resizeImage($value['PREVIEW_PICTURE'], 545, 308, BX_RESIZE_IMAGE_EXACT); ?>">
                <img src="<?= resizeImage($value['PREVIEW_PICTURE'], 799, 451, BX_RESIZE_IMAGE_EXACT); ?>" alt="<?= $value['NAME']; ?>">
            </picture>
        </a>

        <?php if (!empty($value['DISPLAY_PROPERTIES']['VIDEO'])): ?>
            <video id="homepage-header-video" autoplay muted loop class="index-video__bg">
                <source src="<?= $value['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['SRC']; ?>" type="<?= $value['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['CONTENT_TYPE']; ?>">
            </video>
        <?php endif; ?>

        <div class="wrapper wrapper_default">
            <div class="index-video__content">
                <div class="row">
                    <div class="col col--lg-7">
                        <?/*if ($value['PROPERTIES']['H1']['VALUE']) {?>
                            <h1 class="index-video__h1"><?=$value['PROPERTIES']['H1']['VALUE']?></h1>
                        <?}*/?>
                        <h2 class="h1 title title_bold index-video__title"><?= $value['NAME']; ?></h2>
                        <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                            <div class="index-video__desc">
                                <p><?= $value['PREVIEW_TEXT']; ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="index-video__buttons">
                            <div class="index-video__buttons-line">
                                <a href="<?= SITE_DIR; ?>catalog/" class="btn btn_box btn_orange index-video__button">
                                    <?= Bitrix\Main\Localization\Loc::getMessage('CATALOG_BUTTON'); ?>
                                </a>
                                <a href="/catalog/gotovaya-produktsiya/" class="btn btn_box btn_blue index-video__button">
                                    <?= Bitrix\Main\Localization\Loc::getMessage('TECHNICS_IN_STOCK'); ?>
                                </a>
                            </div>
                            <?if (SITE_ID != 'en') {?>
                                <div class="index-video__buttons-line">
                                    <a href="/servis/lizing/" class="btn btn_wide btn_box btn_bordered index-video__button">
                                        <?= Bitrix\Main\Localization\Loc::getMessage('LEASING_CALC'); ?>
                                    </a>
                                </div>
                            <?}?>
                        </div>
                    </div>
                    <?php /*<div class="col col--lg-4 col--lg-offset-1">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "homepage.header.video.popup.btn",
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
                                "IBLOCK_ID" => 58,
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
                                "PROPERTY_CODE" => array("TITLE_EN", "FILE"),
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
                            ),
                            $this->getComponent()
                        ); ?>
                    </div> */ ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif;  ?>