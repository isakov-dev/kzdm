<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_animated secton_b-small secton_t-n wow ">
        <div class="wrapper wrapper_default">
            <div class="team-lines team-lines_offset">
                <div class="row">
                    <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                        <div class="col col--lg-3 col--sm-6">
                            <div class="team-line team-line_offset">
                                <h4 class="team-line__title title title_block title_small-offset"><?= $value['NAME']; ?></h4>
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['POST'])): ?>
                                    <span class="team-line__job title title_block title_small-offset"><?= $value['DISPLAY_PROPERTIES']['POST']['VALUE']; ?></span>
                                <?php endif; ?>
                                <?php if (!empty($value['DISPLAY_PROPERTIES']['PHONE'])): ?>
                                    <a href="<?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?>" class="team-line__phone"><?= $value['DISPLAY_PROPERTIES']['PHONE']['VALUE']; ?> <?= $value['DISPLAY_PROPERTIES']['PHONE']['DESCRIPTION']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="btn-wrapper btn-wrapper_center">
                <a href="/prodazha-v-regionakh/" class="btn  btn_box btn_orange">Офисы продаж в регионах</a>
            </div>
        </div>
    </div>
<?php endif; ?>
