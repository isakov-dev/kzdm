<div class="section section_animated wow">
    <div class="wrapper wrapper_default">
        <div class="feedback">
            <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/feedback-bg.jpg" alt="" class="feedback__img">
            <div class="feedback__content">
                <h3 class="h3 feedback__title title">
                    <?= Bitrix\Main\Localization\Loc::getMessage('FORM_TITLE'); ?>
                </h3>
                <form id="blue-form" action="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/ajax/consult.php" class="feedback-form feedback-form_offset" method="post">
                    <?= bitrix_sessid_post(); ?>
                    <?php if (!empty($arParams['FIELDS'])): ?>
                        <?php foreach ($arParams['FIELDS'] as $key => $value): ?>
                            <input type="<?= strtolower($value['TYPE']); ?>" class="feedback-form__input phone-mask form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                            <span class="error-msg"></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <button type="submit" class="btn btn_box btn_orange"><?= Bitrix\Main\Localization\Loc::getMessage('BUTTON'); ?></button>
                </form>
                <span class="politic feedback-form__politic title title_block title_large title_white">
                    <?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_BEFORE'); ?> <a href="<?= SITE_DIR; ?>obrabotka-personalnykh-dannykh/" class="title title_decorated" target="_blank"><?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_AFTER'); ?></a>
                </span>
            </div>
        </div>
    </div>
</div>