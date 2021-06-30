<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated secton_t-small wow">
        <div class="wrapper wrapper_default">
            <div class="news">
                <h2 class="h2 title title_demy section__title"><?= Bitrix\Main\Localization\Loc::getMessage('NEWS_TITLE'); ?></h2>
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-4">
                            <div class="new-tile new-tile_offset">
                                <span class="title title_block title_large title_dark-grey new-tile__date"><?= FormatDate('d F Y'); ?></span>
                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="new-tile__title match-height"><?= $value['NAME']; ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="more-widget">
                    <a href="<?= SITE_DIR; ?>novosti/" class="more-widget__link"><?= Bitrix\Main\Localization\Loc::getMessage('ALL_NEWS'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
