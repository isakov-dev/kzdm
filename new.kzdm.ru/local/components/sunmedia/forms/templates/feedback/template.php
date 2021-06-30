<form id="feedback-form" class="form form_contacts" method="post" action="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/ajax/feedback.php" enctype="application/x-www-form-urlencoded">
    <?= bitrix_sessid_post(); ?>
    <?php if (!empty($arParams['FIELDS'])): ?>
        <?php foreach ($arParams['FIELDS'] as $key => $value): ?>
            <?php if ('TEXTAREA' !== $value['TYPE']): ?>
                <div class="form__item form__item_b-offset">
                    <input type="<?= strtolower($value['TYPE']); ?>" class="input input_light form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                    <span class="error-msg"></span>
                </div>
            <?php else: ?>
                <div class="form__item form__item_b-offset">
                    <textarea class="textarea textarea_light form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>></textarea>
                    <span class="error-msg"></span>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <div class="form__item form__item_b-offset">
        <span class="title title_m politic politic_gray">
            <?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_BEFORE'); ?> <a href="<?= SITE_DIR; ?>obrabotka-personalnykh-dannykh/" target="_blank"><?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_AFTER'); ?></a>
        </span>
    </div>
    <div class="form__item form__item_offset">
        <button class="btn btn_submit btn_box btn_orange"><?= Bitrix\Main\Localization\Loc::getMessage('SEND'); ?></button>
    </div>
</form>