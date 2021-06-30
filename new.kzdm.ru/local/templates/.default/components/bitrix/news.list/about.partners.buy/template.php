<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="our-partners">
                <div class="row">
                    <div class="col col--lg-12">
                        <div class="our-partners__widget">
                            <div class="partners-nav">
                                <div class="wrapper wrapper_default">
                                    <div class="row">
                                        <div class="col col--xl-8 col--xl-offset-2">
                                            <h2 class="h2 title title_centered partners-nav__title title_big-offset">
                                                <?=GetMessage("YOU_CAN_PURCHASE")?>
                                            </h2>
                                            <div class="partners-nav__items">
                                                <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                                                    <div class="partners-nav__col">
                                                        <div class="partners-nav__item<?= ($key === 0) ? ' active' : false; ?>">
                                                            <span style="background-color: <?= $value['DISPLAY_PROPERTIES']['BG_COLOR']['VALUE']; ?>" class="partners-nav__color"></span>
                                                            <img class="partners-nav__pic svg" src="<?= $value['DISPLAY_PROPERTIES']['IMG']['FILE_VALUE']['SRC']; ?>" alt="<?= $value['NAME']; ?>">
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="our-partners__slider">
                                <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                                    <div>
                                        <div class="our-partners__item" style="background-image: url('<?= resizeImage($value['PREVIEW_PICTURE'], 1784, 1000); ?>')"></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
