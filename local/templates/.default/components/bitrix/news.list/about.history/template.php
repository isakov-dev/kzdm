<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="sticky-time time-hide">
        <div class="wrapper wrapper_default">
            <div class="col col--xl-8 col--xl-offset-2">
                <div class="row">
                    <div class="col col--lg-6">
                        <div class="timeline__years">
                            <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                                <span class="timeline__year<?= ($key === 0) ? ' active' : false; ?>"><?= $value['DISPLAY_PROPERTIES']['YEAR']['VALUE']; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--xl-8 col--xl-offset-2">
                    <div class="history-time timeline">
                        <div class="row">
                            <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                                <div class="col col--lg-6 col--lg-offset-6">
                                    <div class="timeline__item timeline__item_offset" data-year="<?= $value['DISPLAY_PROPERTIES']['YEAR']['VALUE']; ?>">
                                        <span class="timeline__static-year"><?= $value['DISPLAY_PROPERTIES']['YEAR']['VALUE']; ?></span>
                                        <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                            <div class="timeline__img">
                                                <img class="timeline__pic" src="<?= resizeImage($value['PREVIEW_PICTURE'], 568, 319); ?>" alt="<?= $value['NAME']; ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="timeline__content">
                                            <h4 class="timeline__title title title_bold title_medium title_small-offset"><?= $value['NAME']; ?></h4>
                                            <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                                <div class="timeline__desc">
                                                    <p><?= $value['PREVIEW_TEXT']; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
