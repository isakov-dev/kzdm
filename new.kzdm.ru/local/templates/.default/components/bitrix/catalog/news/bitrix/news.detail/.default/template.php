<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)): ?>
    <div itemscope itemtype="http://schema.org/NewsArticle">
        <div class="single-header single-header_gray">
            <div class="single-header__content">
                <div class="wrapper wrapper_default">
                    <h1 class="h1 single__title" itemprop="headline"><?= $arResult['NAME']; ?></h1>
                </div>
            </div>
        </div>
        <div class="section section_default section_animated wow">
            <div class="wrapper wrapper_default">
                <div class="single-new">
                    <div class="row">
                        <div class="col col--xl-6 col--xl-offset-3">
                            <span class="title single-new__date title_block title_large title_black title_average-offset">
                                <?= FormatDate('d F Y', MakeTimeStamp($arResult['ACTIVE_FROM'])); ?>
                            </span>
                            <?php if (!empty($arResult['DETAIL_PICTURE'])): ?>
                                <div class="alone-img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                    <img src="<?= resizeImage($arResult['DETAIL_PICTURE'], 1176, 640); ?>" alt="<?= $arResult['NAME']; ?>">
                                    <meta itemprop="url" content="<?=resizeImage($arResult['DETAIL_PICTURE'], 1176, 640);?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
                        <div class="row">
                            <div class="col col--lg-6 col--lg-offset-3">
                                <div class="section section_default section_article">
                                    <div itemprop="articleBody">
                                        <?= $arResult['DETAIL_TEXT']; ?>
                                    </div>
                                    <?php if (!empty($arResult['DISPLAY_PROPERTIES']['AUTHOR'])): ?>
                                        <div class="presents" itemprop="author" itemscope itemtype="http://schema.org/Person">
                                            <p itemprop="name"><?= $arResult['DISPLAY_PROPERTIES']['AUTHOR']['VALUE']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php
                    $GLOBALS['otherFilter'] = [
                        '!ID' => $arResult['ID'],
                    ];
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "news.other",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => $arParams['CACHE_FILTER'],
                            'CACHE_TYPE' => $arParams['CACHE_TYPE'],
                            'CACHE_TIME' => $arParams['CACHE_TIME'],
                            'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "otherFilter",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "2",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => $arParams['LIST_PROPERTY_CODE'],
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
                        $component
                    ); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
