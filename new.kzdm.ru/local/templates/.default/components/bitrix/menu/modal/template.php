<?php if (!empty($arResult)): ?>
<div class="window__row window__row_bordered">
    <?php $previousLevel = 0; ?>
    <?php foreach ($arResult as $key => $arItem): ?>
        <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
            <?= str_repeat('</div></div>', ($previousLevel - $arItem['DEPTH_LEVEL'])); ?>
        <?php endif; ?>

        <?php if ($arItem['IS_PARENT']): ?>
            <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                <div class="window__item window__item_offset">
                    <a href="<?= $arItem['LINK']; ?>" class="h4 title title_upper title_bold window__title title_small-offset title_block"><?= $arItem['TEXT']; ?></a>
                    <div class="window-menu">
            <?php else: ?>
                <div class="window__item window__item_offset">
                    <a href="<?= $arItem['LINK']; ?>" class="h4 title title_upper title_bold window__title title_small-offset title_block"><?= $arItem['TEXT']; ?></a>
                    <div class="window-menu">
            <?php endif; ?>
        <?php else: ?>
            <?php if ($arItem['DEPTH_LEVEL'] === 1): ?>
                <div class="window__item window__item_offset">
                    <a href="<?= $arItem['LINK']; ?>" class="h4 title title_upper title_bold window__title title_small-offset title_block"><?= $arItem['TEXT']; ?></a>
                </div>
            <?php else: ?>
                <?php
                $hasIcon = !empty($arItem['PARAMS']['UF_ICON_ID']) || !empty($arItem['PARAMS']['UF_ICON']);
                ?>
                <a href="<?= $arItem['LINK']; ?>"
                   class="iconed iconed_center window-menu__link<?= $hasIcon ? ' window-menu__link_mb' : ''; ?>">
                    <?php if (!empty($arItem['PARAMS']['UF_ICON'])): ?>
                        <span class="window-menu__ico uploaded-ico">
                            <?= $arItem['PARAMS']['UF_ICON']; ?>
                        </span>
                    <?php elseif (!empty($arItem['PARAMS']['UF_ICON_ID'])): ?>
                        <span class="window-menu__ico">
                            <svg class="<?= $arItem['PARAMS']['UF_ICON_ID']; ?> window-menu__car iconed__ico_r-default">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/cars.svg#<?= $arItem['PARAMS']['UF_ICON_ID']; ?>"></use>
                            </svg>
                        </span>
                    <?php endif; ?>
                    <span class="window-menu__title title title_m"><?= $arItem['TEXT']; ?></span>
                </a>

            <?php endif; ?>
        <?php endif; ?>

        <?php $previousLevel = $arItem['DEPTH_LEVEL']; ?>
    <?php endforeach; ?>

    <?php if ($previousLevel > 1): ?>
        <?= str_repeat('</div></div>', ($previousLevel - 1)); ?>
    <?php endif; ?>
</div>
<?php endif; ?>
