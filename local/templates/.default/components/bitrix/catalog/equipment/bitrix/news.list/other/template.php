<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated wow section_default" id="catalog-section">
        <div class="wrapper wrapper_default">
            <div class="cars">
                <h2 class="h2 title title_centered title_big-offset">Похожие товары</h2>
                <div class="row row_middle">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-4">
                            <div class="prod-tile prod-tile_offset">
                                <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                    <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__img">
                                        <img class="prod-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 871, 490); ?>" alt="<?= $value['NAME']; ?>">
                                    </a>
                                <?php endif; ?>
                                <div class="prod-tile__desc match-height" style="height: 53px;">
                                    <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="prod-tile__title title_demi title_block h4"><?= $value['NAME']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
