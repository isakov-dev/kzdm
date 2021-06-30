<?php if (!empty($arResult)): ?>
    <div class="top-nav top-nav_bordered sub-menu stick-menu inner-menu">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--lg-10 col--lg-offset-1">
                    <div class="sub-menu__content">
                        <?php
                        foreach ($arResult as $arItem):
                            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                                continue;
                            }
                            ?>
                            <a href="<?= $arItem["LINK"]; ?>" class="sub-menu__link<?= $arItem["SELECTED"] ? ' active' : false; ?>"><?= $arItem["TEXT"] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>