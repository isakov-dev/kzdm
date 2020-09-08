<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)): ?>
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?= $arResult['NAME']; ?></h1>
            </div>
        </div>
    </div>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="single-new">
                <div class="row">
                    <div class="col col--xl-6 col--xl-offset-3">
                        <?php if (!empty($arResult['FIELDS']['ACTIVE_TO'])): ?>
                            <span class="title single-new__date title_block title_large title_black  title_average-offset"><?= Bitrix\Main\Localization\Loc::getMessage('TO'); ?> <?= FormatDate('d.m.Y', MakeTimeStamp($arResult['FIELDS']['ACTIVE_TO'])); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($arResult['DETAIL_PICTURE'])): ?>
                    <div class="row">
                        <div class="col col--lg-10 col--lg-offset-1">
                            <div class="alone-img">
                                <img src="<?= resizeImage($arResult['DETAIL_PICTURE'], 1176, 640); ?>" alt="<?= $arResult['NAME']; ?>">
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col col--lg-10 col--lg-offset-1">
                            <div class="alone-img">
                                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/sales-2.jpg" alt="<?= $arResult['NAME']; ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
                    <div class="row">
                        <div class="col col--lg-6 col--lg-offset-3">
                            <div class="section section_default">
                                <?= $arResult['DETAIL_TEXT']; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
