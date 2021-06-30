<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="people">
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-3 col--md-3 col--sm-6">
                            <div class="people-tile">
                                <span class="people-tile__img">
                                    <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                        <img src="<?= resizeImage($value['PREVIEW_PICTURE'], 416, 410); ?>" alt="<?= $value['NAME']; ?>">
                                    <?php else: ?>
                                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/man-no.jpg" alt="<?= $value['NAME']; ?>">
                                    <?php endif; ?>
                                </span>
                                <div class="people-tile__desc">
                                    <?php if (!empty($value['DISPLAY_PROPERTIES']['POST'])): ?>
                                        <span class="title title_block people-tile__job match-height title_small-offset"><?= $value['DISPLAY_PROPERTIES']['POST']['VALUE']; ?></span>
                                    <?php endif; ?>
                                    <span class="people-tile__title title title_bold title_block h4"><?= $value['NAME']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
