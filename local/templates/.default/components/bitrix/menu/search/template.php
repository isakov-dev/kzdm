<?php if (!empty($arResult)): ?>
    <div class="search-more">
        <?php
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                continue;
            }
            ?>
            <a href="<?= $arItem["LINK"]; ?>" class="title title_m title_blue search-more__link"><?= $arItem["TEXT"] ?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>