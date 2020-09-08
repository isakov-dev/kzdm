<?php if (!empty($arResult)): ?>
    <div class="mobile__section">
        <?php $previousLevel = 0; ?>
        <?php foreach ($arResult as $key => $arItem): ?>
            <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat('</div></div>', ($previousLevel - $arItem['DEPTH_LEVEL'])); ?>
            <?php endif; ?>

            <?php if ($arItem['IS_PARENT']): ?>
                <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                    <div class="footer__col">
                        <span class="footer__title footer__title-js title title_block title_upper title_demy">
                            <span class="footer-title__name"><?= $arItem['TEXT']; ?></span>
                            <i class="footer-title__arrow "></i>
                        </span>
                        <div class="footer-links">
                <?php else: ?>
                    <div class="footer__col">
                        <span class="footer__title footer__title-js title title_block title_upper title_demy">
                            <span class="footer-title__name"><?= $arItem['TEXT']; ?></span>
                            <i class="footer-title__arrow "></i>
                        </span>
                        <div class="footer-links">
                <?php endif; ?>
            <?php else: ?>
                <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                    <div class="footer__col">
                        <span class="footer__title title title_block title_upper title_demy">
                            <a href="<?= $arItem['LINK']; ?>" class="footer-title__name"><?= $arItem['TEXT']; ?></a>
                        </span>
                    </div>
                <?php else: ?>
                    <a href="<?= $arItem['LINK']; ?>" class="footer__link"><?= $arItem['TEXT']; ?></a>
                <?php endif; ?>
            <?php endif; ?>

            <?php $previousLevel = $arItem['DEPTH_LEVEL']; ?>
        <?php endforeach; ?>

        <?php if ($previousLevel > 1): ?>
            <?= str_repeat('</div></div>', ($previousLevel - 1)); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
