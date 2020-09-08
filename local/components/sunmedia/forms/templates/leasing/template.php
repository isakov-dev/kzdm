<div style="display: none;" id="leasing">
    <div class="popup">
        <div class="h2 popup__title title title_big-offset"><?= Bitrix\Main\Localization\Loc::getMessage('TITLE_1'); ?></div>
        <div class="popup__desc title title_large ">
            <p><?= Bitrix\Main\Localization\Loc::getMessage('DESCRIPTION'); ?></p>
        </div>
        <div class="popup__contacts">
            <a href="tel:88003509580" class="phone phone_big popup__phone">8 800 350 95 80</a>
            <div class="soc popup__soc">
                <a href="#" class="soc__ico soc__ico_fb">
                    <svg class="fb-ico iconed__ico">
                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fb-ico"></use>
                    </svg>
                </a>
                <a href="#" class="soc__ico soc__ico_telegramm">
                    <svg class="telegramm-ico iconed__ico">
                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#telegramm-ico"></use>
                    </svg>
                </a>
                <a href="#" class="soc__ico soc__ico_watsup">
                    <svg class="watsup-ico iconed__ico">
                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#watsup-ico"></use>
                    </svg>
                </a>
            </div>
        </div>
        <form id="leasing-form" action="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/ajax/leasing.php" class="form popup__form" method="post" enctype="application/x-www-form-urlencoded">
            <?= bitrix_sessid_post(); ?>
            <?php if (!empty($arParams['FIELDS'])): ?>
                <?php foreach ($arParams['FIELDS'] as $key => $value): ?>
                    <?php if ('TEXTAREA' !== $value['TYPE']): ?>
                        <div class="form__item form__item_offset">
                            <input type="<?= strtolower($value['TYPE']); ?>" class="input input_light form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                            <span class="error-msg"></span>
                        </div>
                    <?php else: ?>
                        <div class="form__item form__item_offset">
                            <textarea class="textarea textarea_light form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>></textarea>
                            <span class="error-msg"></span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="form__item form__item_offset">
                <div class="licence title title_light-grey title_m politic">
                    <p><?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_BEFORE'); ?> <a href="/obrabotka-personalnykh-dannykh/" target="_blank"><?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_AFTER'); ?></a></p>
                </div>
            </div>
            <div class="form__item form__item_offset">
                <button class="btn btn_submit btn_box btn_orange"><?= Bitrix\Main\Localization\Loc::getMessage('BUTTON'); ?></button>
            </div>
        </form>
    </div>
</div>