<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="row">
        <div class="col col--lg-6 col--lg-offset-3">
            <h2 class="h2 title title_big-offset">Другие новости</h2>
        </div>
    </div>
    <div class="row">
        <div class="col col--lg-10 col--lg-offset-1">
            <div class="news-list">
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-6">
                            <div class="news-tile news-tile_m-offset">
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
            </div>
        </div>
    </div>
<?php endif; ?>
