<h3 class="h3"><?= Bitrix\Main\Localization\Loc::getMessage('TITLE_2'); ?></h3>
<form id="spare-form" class="form form_send" enctype="multipart/form-data" action="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/ajax/spares.php" method="post">
    <?= bitrix_sessid_post(); ?>
    <?php if (!empty($arParams['FIELDS'])): ?>
        <?php foreach ($arParams['FIELDS'] as $key => $value): ?>
            <div class="form__item form__item_offset">
                <?php if (strtolower($value['TYPE']) == 'file'): ?>
                    <div class="file-widget file-widget_line">
                        <input type="<?= strtolower($value['TYPE']); ?>" name="files[]" class="uploader" data-title="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" multiple>
                    </div>
                <?php elseif(strtolower($value['TYPE']) == 'tel'): ?>
                    <label class="label label_default"><?= Bitrix\Main\Localization\Loc::getMessage($key); ?></label>
                    <input type="<?= strtolower($value['TYPE']); ?>" class="input input_default phone-mask form-field" placeholder="<?= !empty(Bitrix\Main\Localization\Loc::getMessage($key.'_PLACEHOLDER')) ? Bitrix\Main\Localization\Loc::getMessage($key.'_PLACEHOLDER') : false; ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                    <span class="error-msg"></span>
                <?php elseif(strtolower($value['TYPE']) == 'textarea'): ?>
                    <div class="file-widget file-widget_line">
                        <textarea class="textarea textarea_light form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>></textarea>
                        <span class="error-msg"></span>
                    </div>
                <?php else: ?>
                    <label class="label label_default"><?= Bitrix\Main\Localization\Loc::getMessage($key); ?></label>
                    <input type="<?= strtolower($value['TYPE']); ?>" class="input input_default form-field" placeholder="<?= !empty(Bitrix\Main\Localization\Loc::getMessage($key.'_PLACEHOLDER')) ? Bitrix\Main\Localization\Loc::getMessage($key.'_PLACEHOLDER') : false; ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                    <span class="error-msg"></span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <div class="form__item form__item_offset">
        <span class="title title_m title_block title_light-grey">
            <?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_BEFORE_1'); ?> <a href="<?= SITE_DIR; ?>obrabotka-personalnykh-dannykh/" target="_blank"><?= Bitrix\Main\Localization\Loc::getMessage('POLITIC_AFTER_1'); ?></a>
        </span>
    </div>
    <div class="form__item form__item_offset">
        <button class="btn btn_submit btn_box btn_orange"><?= Bitrix\Main\Localization\Loc::getMessage('BUTTON'); ?></button>
    </div>
</form>

<?php
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/fileuploader.css');