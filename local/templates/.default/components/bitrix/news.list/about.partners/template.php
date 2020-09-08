<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
<div class="section section_default section_animated wow">
    <div class="wrapper wrapper_default">
        <div class="row">
            <div class="col col--lg-12">
                <h2 class="h2 h2_white process__title title title_centered"><?= Bitrix\Main\Localization\Loc::getMessage('ABOUT_PARTNERS_BLOCK_TITLE'); ?></h2>
                <div class="partners partners__lined">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="partners__col">
                            <div class="partners__item partners__item_line partners__item_offset" style="background-color: <?= $value['DISPLAY_PROPERTIES']['BG_COLOR']['VALUE']; ?>;">
                                <img class="partners__img svg" src="<?= $value['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE']['SRC']; ?>" alt="<?= $value['NAME']; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="more-widget">
                    <a href="/o-zavode/partnery/" class="more-widget__link"><?= Bitrix\Main\Localization\Loc::getMessage('ABOUT_PARTNERS_MORE_URL'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
