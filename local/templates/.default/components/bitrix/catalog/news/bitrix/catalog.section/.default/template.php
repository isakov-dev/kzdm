<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['DESCRIPTION'])): ?>
    <?php $this->SetViewTarget('page_description'); ?>
    <div class="single__desc">
        <p><?= $arResult['DESCRIPTION']; ?></p>
    </div>
    <?php $this->EndViewTarget(); ?>
<?php endif; ?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="service">
                <div class="row">
                    <div class="col col--xl-8 col--xl-offset-2">
                        <div class="news-list">
                            <div class="row">
                                <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                                    <div class="col col--md-6 ">
                                        <div class="news-tile news-tile_offset">
                                            <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="news-tile__img">
                                                    <img class="news-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 279); ?>" alt="<?= $value['NAME']; ?>">
                                                </a>
                                            <?php endif; ?>
                                            <div class="news-tile__content">
                                                <span class="title title_block title_large title_dark-grey new-tile__date"><?= FormatDate('d F Y', MakeTimeStamp($value['ACTIVE_FROM'])); ?></span>
                                                <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="news-tile__title title title_block title_demi"><?= $value['NAME']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?= $arResult['NAV_STRING']; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
