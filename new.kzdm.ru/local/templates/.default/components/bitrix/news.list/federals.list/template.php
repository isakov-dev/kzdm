<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="regions">
            <div class="row">
                <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                    <div class="col col--lg-3">
                        <div class="regions__item">
                            <h4 class="h4 regions__title title title_b-offset"><?= $value['ABBR']; ?></h4>
                            <?php if (!empty($value['REGIONS'])): ?>
                                <div class="regions__desc title title_large"><?= implode(', ', $value['REGIONS']); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
