<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_last">
        <div class="vacancy__list">
            <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                <div id="vacancy-<?= $value['ID']; ?>" class="vacancy<?= ($key === 0) ? ' vacancy_offset' : false; ?>">
                    <span class="date vacancy__date title title_large title_grey title_small-offset title_block">
                        опубликовано <?= FormatDate('d.m.Y'); ?>
                    </span>
                    <h2 class="h2 title title_medium title_big-offset"><?= $value['NAME']; ?></h2>
                    <div class="row">
                        <div class="col col--lg-8">
                            <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                <div class="box box__l-offset">
                                    <h4 class="box__title box__title_average"><?= Bitrix\Main\Localization\Loc::getMessage('RESPONSIBILITIES'); ?></h4>
                                    <?= $value['PREVIEW_TEXT']; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($value['DETAIL_TEXT'])): ?>
                                <div class="box box__l-offset">
                                    <h4 class="box__title box__title_average"><?= Bitrix\Main\Localization\Loc::getMessage('REQUIREMENTS'); ?></h4>
                                    <span class="title title_large title_block"><?= $value['DETAIL_TEXT']; ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($value['DISPLAY_PROPERTIES']['PAY']) || !empty($value['DISPLAY_PROPERTIES']['WORK'])): ?>
                            <div class="col col--lg-3 col--lg-offset-1">
                                <div class="vacancy-service">
                                    <?php if (!empty($value['DISPLAY_PROPERTIES']['PAY'])): ?>
                                        <div class="vacancy-service__item">
                                            <span class="vacancy__price"><?= $value['DISPLAY_PROPERTIES']['PAY']['VALUE']; ?></span>
                                            <?php if (!empty($value['DISPLAY_PROPERTIES']['PAY']['DESCRIPTION'])): ?>
                                                <span class="vacancy__desc title title_large title_block"><?= $value['DISPLAY_PROPERTIES']['PAY']['DESCRIPTION']; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($value['DISPLAY_PROPERTIES']['WORK'])): ?>
                                        <div class="vacancy-service__item">
                                            <span class="vacancy__desc title title_large title_block"><?= Bitrix\Main\Localization\Loc::getMessage('SCHEDULE'); ?></span>
                                            <span class="vacancy__price"><?= $value['DISPLAY_PROPERTIES']['WORK']['VALUE']; ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
