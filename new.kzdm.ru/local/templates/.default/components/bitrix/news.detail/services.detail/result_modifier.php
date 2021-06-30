<?php

$arFilter = [
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y',
    'GLOBAL_ACTIVE' => 'Y'
];

if (!empty($arResult['IBLOCK_SECTION_ID'])) {
    $arFilter['IBLOCK_SECTION_ID'] = $arResult['IBLOCK_SECTION_ID'];
}

$resNav = \CIBlockElement::getList(
    [
        $arParams['SORT_BY1'] => $arParams['SORT_ORDER1'],
        $arParams['SORT_BY2'] => $arParams['SORT_ORDER2'],
    ],
    $arFilter,
    false,
    [
        'nPageSize' => 1,
        'nElementID' => $arResult['ID']
    ],
    [
        'ID',
        'DETAIL_PAGE_URL',
        'NAME',
        'PREVIEW_PICTURE',
        'DETAIL_PICTURE'
    ]
);

$arNav = [];

while ($item = $resNav->GetNext()) {
    $arNav[] = $item;
}

if (count($arNav) > 2) {
    $arResult['NEXT'] = $arNav[0];
    $arResult['PREV'] = $arNav[2];
} else {
    if ($arNav[0]['ID'] == $arResult['ID']) {
        $arResult['NEXT'] = false;
        $arResult['PREV'] = $arNav[1];
    } else {
        $arResult['NEXT'] = $arNav[0];
        $arResult['PREV'] = false;
    }
}

if (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY'])) {
    $defaultTplPath = SITE_DEFAULT_TEMPLATE_PATH;

    $gal = "<div class=\"section section_default section_animated wow\">
                <div class=\"wrapper wrapper_default\">
                    <div class=\"row\">
                        <div class=\"col col--lg-10 col--lg-offset-1\">
                            <h2 class=\"h2 title title_block title_centered title_average-offset title_middle-offset\">
                                " . GetMessage("OUR_WORKS") . "
                            </h2>
                        </div>
                    </div>
                </div>
                <div class=\"work-widget\">
                    <div class=\"work-widget__nav\">
                        <div class=\"wrapper wrapper_default\">
                            <div class=\"work-widget__arrows\">
                                <a href=\"#\" class=\"work-widget__arrow work-widget__arrow_left work-left\">
                                    <svg class=\"work-arrow work-arrow-left\">
                                        <use xlink:href=\"{$defaultTplPath}/assets/images/icons.svg#arrow-left-ico\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" class=\"work-widget__arrow work-widget__arrow_right work-right\">
                                    <svg class=\"work-arrow work-arrow-right\">
                                        <use xlink:href=\"{$defaultTplPath}/assets/images/icons.svg#arrow-right-ico\"></use>
                                    </svg>
                                    <svg viewBox=\"0 0 36 36\" class=\"circular-chart\" data-speed=\"5000\">
                                        <path class=\"circle\" stroke-dasharray=\"100, 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"work-slider slider\">";

    foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE'] as $key => $value) {
        $img = resizeImage($value, 1172, 640, BX_RESIZE_IMAGE_EXACT);
        $gal .= "<div><div class=\"work-slider__item\"><img class=\"work-slider__pic\" src=\"{$img}\" alt=\"\"></div></div>";
    }

    $gal .= "</div></div></div>";

    $arResult['DETAIL_TEXT'] = str_replace('#GALLERY#', $gal, $arResult['DETAIL_TEXT']);
}