<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated wow preims-sec secton_b-small">
        <div class="wrapper wrapper_micro">
            <div class="preims ">
                <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                    <?php if (!empty($value['DISPLAY_PROPERTIES']['URL'])): ?>
                        <a href="<?= $value['DISPLAY_PROPERTIES']['URL']['VALUE']; ?>" class="preim preim_line match-height">
                            <span class="preim__content">
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['ICON'])): ?>
                                    <span class="preim__ico preim__ico_offset">
                                        <img class="svg <?= basename($value['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC'], '.svg'); ?>" src="<?= $value['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC']; ?>" alt="<?= $value['NAME']; ?>">
                                    </span>
                                <?php endif; ?>
                                <span class="preim__info">
                                    <h4 class="h4 preim__title title title_small-offset"><?= $value['NAME']; ?></h4>
                                    <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                        <span class="preim__desc title title_large">
                                            <p><?= $value['PREVIEW_TEXT']; ?></p>
                                        </span>
                                    <?php endif; ?>
                                </span>
                            </span>
                        </a>
                    <?php else: ?>
                        <div class="preim preim_line match-height">
                            <span class="preim__content">
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['ICON'])): ?>
                                    <span class="preim__ico preim__ico_offset">
                                        <img class="svg <?= basename($value['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC'], '.svg'); ?>" src="<?= $value['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC']; ?>" alt="<?= $value['NAME']; ?>">
                                    </span>
                                <?php endif; ?>
                                <span class="preim__info">
                                    <h4 class="h4 preim__title title title_small-offset"><?= $value['NAME']; ?></h4>
                                    <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                        <span class="preim__desc title title_large">
                                            <p><?= $value['PREVIEW_TEXT']; ?></p>
                                        </span>
                                    <?php endif; ?>
                                </span>
                            </span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
