<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)): ?>
    <div class="section section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="single single_offset">
                <div class="row">
                    <div class="col col--xl-8 col--xl-offset-2">
                        <div class="sertificates">
                            <div class="row">
                                <?php if (!empty($arResult['DISPLAY_PROPERTIES']['FILES'])): ?>
                                    <?php foreach ($arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'] as $key => $value): ?>
                                        <div class="col col--xl-3 col--lg-4 col--sm-6">
                                            <a href="<?= $value['SRC']; ?>" class="doc-company doc-company_offset iconed iconed_start" download>
                                                <img class="iconed__ico doc-company__ico iconed__ico_r-default" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/doc-company.svg" alt="">
                                                <span class="doc-company__title title_m"><?= !empty($value['DESCRIPTION']) ? $value['DESCRIPTION'] : $value['ORIGINAL_NAME']; ?></span>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
