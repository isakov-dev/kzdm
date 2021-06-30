<?php if (!empty($arResult)): ?>
    <div class="city city_offset">
        <a data-src="#city-popup" href="javascript:;" class="inline-popup-trigger city-btn iconed iconed_center">
            <svg class="location-ico iconed__ico iconed__ico_r-small">
                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#location-ico">
                </use>
            </svg>
            <span class="city-btn__content">
                <span class="city-btn__title "><?= SITE_ID == 'en' ? $arResult['TITLE_EN'] : $arResult['TITLE']; ?></span>
                <i class="city-arrow city-arrow_offset"></i>
            </span>
        </a>
    </div>
<?php endif; ?>