<?php

if (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY'])) {
    $tplDefaultPath = SITE_DEFAULT_TEMPLATE_PATH;
    $gal = "<div class=\"box box_offset\">
                <div class=\"new-slider-wrapper work-widget\">
                    <div class=\"work-widget__arrows\">
                        <a href=\"#\" class=\"work-widget__arrow work-widget__arrow_left work-left\">
                            <svg class=\"work-arrow work-arrow-left\">
                                <use xlink:href=\"{$tplDefaultPath}/assets/images/icons.svg#arrow-left-ico\"></use>
                            </svg>
                        </a>
                        <a href=\"#\" class=\"work-widget__arrow work-widget__arrow_right work-right\">
                            <svg class=\"work-arrow work-arrow-right\">
                                <use xlink:href=\"{$tplDefaultPath}/assets/images/icons.svg#arrow-right-ico\"></use>
                            </svg>
                            <svg viewBox=\"0 0 36 36\" class=\"circular-chart\" data-speed=\"5000\">
                                <path class=\"circle\" stroke-dasharray=\"100, 100\" d=\"M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831\"></path>
                            </svg>
                        </a>
                    </div>
                    <div class=\"news-slider slider slider_margin\">";

    foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE'] as $key => $value) {
        $img = resizeImage($value, 416, 234, BX_RESIZE_IMAGE_EXACT);
        $gal .= "<div>
                    <div class=\"news-slider__item\">
                        <img src=\"{$img}\" alt=\"\">
                    </div>
                </div>";
    }

    $gal .= "</div></div></div>";

    $arResult['DETAIL_TEXT'] = str_replace('#GALLERY#', $gal, $arResult['DETAIL_TEXT']);
}