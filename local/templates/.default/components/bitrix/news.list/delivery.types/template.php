<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_last section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="delivery__tiles">
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-3 col--sm-6">
                            <div class="delivery-tile">
                                <div class="delivery-tile__img">
                                    <img class="delivery-tile__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 416, 250); ?>" alt="<?= $value['NAME']; ?>">
                                </div>
                                <h4 class="delivery-tile__title title_block title_demi"><?= $value['NAME']; ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
