<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="sales-list">
                <div class="row">
                    <div class="col col--xl-8 col--xl-offset-2">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="sale-item sale-item_offset sale-item_imagered" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 1176, 480, BX_RESIZE_IMAGE_EXACT); ?>')">
                                    <?php if (!empty($value['FIELDS']['ACTIVE_TO'])): ?>
                                        <span class="sale-item__date">до <?= FormatDate('d.m.Y', MakeTimeStamp($value['FIELDS']['ACTIVE_TO'])); ?></span>
                                    <?php endif; ?>
                                    <span class="sale-item__content">
                                        <span class="h3 sale-item__title title title_bold title_middle-offset"><?= $value['NAME']; ?></span>
                                        <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                            <span class="sale-item__desc"><?= $value['PREVIEW_TEXT']; ?></span>
                                        <?php endif; ?>
                                    </span>
                                </a>
                            <?php else: ?>
                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="sale-item sale-item_offset " style="background-image: url('<?= ($key % 2 === 0) ? SITE_DEFAULT_TEMPLATE_PATH.'/assets/images/sales-2.jpg' : SITE_DEFAULT_TEMPLATE_PATH.'/assets/images/sales-3.jpg'; ?>')">
                                    <?php if (!empty($value['FIELDS']['ACTIVE_TO'])): ?>
                                        <span class="sale-item__date">до <?= FormatDate('d.m.Y', MakeTimeStamp($value['FIELDS']['ACTIVE_TO'])); ?></span>
                                    <?php endif; ?>
                                    <span class="sale-item__content">
                                        <span class="h3 sale-item__title title title_bold title_middle-offset"><?= $value['NAME']; ?></span>
                                        <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                            <span class="sale-item__desc"><?= $value['PREVIEW_TEXT']; ?></span>
                                        <?php endif; ?>
                                    </span>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?= $arResult['NAV_STRING']; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
