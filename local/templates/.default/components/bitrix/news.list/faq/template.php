<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default section_animated wow">
        <div class="faq">
            <div class="wrapper wrapper_default">
                <div class="row">
                    <div class="col col--lg-10 col--lg-offset-1">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <div class="faq-item toggler">
                                <div class="faq-item__header toggler__trigger">
                                    <span class="faq-item__numb"><?= $key + 1; ?>.</span>
                                    <span class="faq-item__title"><?= $value['NAME']; ?></span>
                                    <button class="faq-item__close"></button>
                                </div>
                                <div class="faq-item__content toggler__content">
                                    <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                        <div class="paragraph"><?= $value['PREVIEW_TEXT']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
