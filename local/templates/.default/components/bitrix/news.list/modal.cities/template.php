<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div style="display: none;" id="city-popup" class="city-popup popup popup_small">
        <div class="popup_content">
            <h3 class="popup__title"><?= Bitrix\Main\Localization\Loc::getMessage('CHOOSE_CITY'); ?>:</h3>
            <div class="city-select">
                <div class="row ">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-2 col--xs-6">
                            <a href="<?= $value['DOMAIN']; ?>" class="city-select__link" data-id="<?= $value['ID']; ?>"><?= (SITE_ID == 'en') ? $value['DISPLAY_PROPERTIES']['TITLE_EN']['VALUE'] : $value['NAME']; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
