<?php

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>
<?php if (!empty($arResult['SECTIONS'])): ?>
    <div class="top-nav top-nav_bordered stick-menu">
        <div class="wrapper wrapper_default">
            <div class="top-nav__content top-nav__content_start">
                <?php foreach ($arResult['SECTIONS'] as $key => $value): ?>
                    <a href="<?= $value['SECTION_PAGE_URL']; ?>"
                       class="iconed iconed_center window-menu__spec window-menu__link window-menu__spec_<?=$value['CODE']?>">
                        <?php if (!empty($value['UF_ICON'])): ?>
                            <span class="window-menu__ico uploaded-ico">
                                <?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . \CFile::GetFileArray($value['UF_ICON'])['SRC']); ?>
                            </span>
                        <?php elseif (!empty($value['UF_ICON_ID'])): ?>
                            <span class="window-menu__ico">
                                <svg class="<?= SITE_ID == 'en' ? $value['UF_ICON_ID_EN'] : $value['UF_ICON_ID']; ?> window-menu__car iconed__ico_r-default">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/cars.svg#<?= SITE_ID == 'en' ? $value['UF_ICON_ID_EN'] : $value['UF_ICON_ID']; ?>"></use>
                                </svg>
                            </span>
                        <?php endif; ?>
                        <span class="window-menu__title title title_m"><?= $value['NAME']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
