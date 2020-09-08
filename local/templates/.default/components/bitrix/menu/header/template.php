<?php if (!empty($arResult)): ?>
    <ul class="header-nav">
        <?php
        $previousLevel = 0;
        foreach ($arResult as $arItem): ?>
            <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat("</div></div></div></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
            <?php endif; ?>

            <?php if ($arItem["IS_PARENT"]): ?>
                <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
                    <li class="header-nav__item spec-js">
                        <a href="<?= $arItem["LINK"]; ?>" class="header-nav__link"><?= $arItem["TEXT"] ?></a>
                        <div class="spec-window<?= ($arItem["LINK"] == '/catalog/' || $arItem["LINK"] == '/en/catalog/') ? ' catalog' : false; ?>">
                            <div class="spec-window__content">
                                <div class="wrapper wrapper_default">
                                    <div class="spec-window__links">
                <?php else: ?>
                    <li class="header-nav__item spec-js">
                        <a href="<?= $arItem["LINK"]; ?>" class="header-nav__link"><?= $arItem["TEXT"] ?></a>
                        <div class="spec-window">
                            <div class="spec-window__content">
                                <div class="wrapper wrapper_default">
                                    <div class="spec-window__links">
                <?php endif; ?>
            <?php else: ?>
                <?php if ($arItem["PERMISSION"] > "D"): ?>
                    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
                        <li class="header-nav__item spec-js">
                            <a href="<?= $arItem["LINK"]; ?>" class="header-nav__link"><?= $arItem["TEXT"] ?></a>
                        </li>
                    <?php else: ?>
                        <a href="<?= $arItem["LINK"]; ?>"
                           class="iconed iconed_center window-menu__spec window-menu__spec_<?=$arItem['PARAMS']['CODE']?> window-menu__link">
                            <?php if (!empty($arItem['PARAMS']['UF_ICON'])): ?>
                                <span class="window-menu__ico uploaded-ico">
                                    <?= $arItem['PARAMS']['UF_ICON']; ?>
                                </span>
                            <?php elseif(!empty($arItem['PARAMS']['UF_ICON_ID'])): ?>
                                <span class="window-menu__ico">
                                    <svg class="<?= $arItem['PARAMS']['UF_ICON_ID']; ?> window-menu__car iconed__ico_r-default">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/cars.svg#<?= $arItem['PARAMS']['UF_ICON_ID']; ?>"></use>
                                    </svg>
                                </span>
                            <?php endif; ?>
                            <span class="window-menu__title title title_m"><?= $arItem["TEXT"] ?></span>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif ?>
            <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
        <?php endforeach; ?>

        <?php if ($previousLevel > 1): ?>
            <?= str_repeat("</div></div></div></div></li>", ($previousLevel - 1)); ?>
        <?php endif; ?>
    </ul>
<?php endif; ?>