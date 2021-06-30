<?php if (!empty($arResult)): ?>
    <?php $previousLevel = 0; ?>
    <?php foreach ($arResult as $key => $arItem): ?>
        <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
            <?= str_repeat('</div></div>', ($previousLevel - $arItem['DEPTH_LEVEL'])); ?>
        <?php endif; ?>

        <?php if ($arItem['IS_PARENT']): ?>
            <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                <div class="col col--xl-2 col--md-3">
                    <div class="footer__col">
                        <a href="<?= $arItem['LINK']; ?>" class="footer__title title title_block title_upper title_demy"><?= $arItem['TEXT']; ?></a>
            <?php else: ?>
                <div class="col col--xl-2 col--md-3">
                    <div class="footer__col">
                        <a href="<?= $arItem['LINK']; ?>" class="footer__title title title_block title_upper title_demy"><?= $arItem['TEXT']; ?></a>
            <?php endif; ?>
        <?php else: ?>
            <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                <div class="col col--xl-2 col--md-3">
                    <div class="footer__col">
                        <a href="<?= $arItem['LINK']; ?>" class="footer__title title title_block title_upper title_demy"><?= $arItem['TEXT']; ?></a>
                    </div>
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
<?php endif; ?>
