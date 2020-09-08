<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)): ?>
    <?php $value = $arResult['ITEMS'][0]; ?>
    <?php if (!empty($value['DISPLAY_PROPERTIES']['FILE'])): ?>
        <a data-fancybox data-src="#video" href="javascript:;" class="play-widget iconed iconed_center">
            <i class="play-circle iconed__ico play-circle_r-offset play-circle_orange"></i>
            <span class="play-widget__content">
                <span class="play-widget__title"><?= (SITE_ID == 'en' && !empty($value['DISPLAY_PROPERTIES']['TITLE_EN'])) ? $value['DISPLAY_PROPERTIES']['TITLE_EN']['VALUE'] : $value['NAME']; ?></span>
                <span id="homepage-header-video-duration" class="play-widget__time">0:49</span>
            </span>
        </a>
    <?php endif; ?>
<?php endif; ?>
