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
    <div class="section section_default  section_animated wow">
        <div class="catalog">
            <div class="wrapper wrapper_default">
                <div class="cars">
                    <div class="row row_middle">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <div class="col col--lg-4 col--sm-6">
                                <div class="prod-tile prod-tile_offset">
                                    <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                        <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__img">
                                            <img class="prod-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 320); ?>" alt="<?= $value['NAME']; ?>">
                                        </a>
                                    <?php endif; ?>
                                    <div class="prod-tile__desc match-height">
                                        <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__title title_demi title_block h4"><?= $value['NAME']; ?></a>
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
<?php endif; ?>
