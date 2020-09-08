<?php if (!empty($arResult)): ?>
    <nav class="footer__row footer-nav footer-nav_bordered">
        <?php
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                continue;
            }
            ?>
            <a href="<?= $arItem["LINK"]; ?>" class="footer-nav__link title title_demy title_m title_upper"><?= $arItem["TEXT"] ?></a>
        <?php endforeach; ?>
    </nav>
<?php endif; ?>