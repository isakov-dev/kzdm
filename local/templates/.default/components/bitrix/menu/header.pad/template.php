<?php if (!empty($arResult)): ?>
    <div class="mobile-line-wrapper">
        <div class="mobile-line">
            <?php
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                    continue;
                }
                ?>
                <a href="<?= $arItem["LINK"]; ?>" class="mobile-line__link"><?= $arItem["TEXT"] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>