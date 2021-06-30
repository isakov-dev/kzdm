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
<?php
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/custom-scroll.css');
?>
<?php if (!empty($arResult['SECTIONS'])): ?>
    <div class="top-nav top-nav_bordered sub-menu stick-menu">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--lg-12">
                    <div class="sub-menu__content sub-menu__content_sb custom-scroll-x">
                        <a href="<?= SITE_DIR; ?>oborudovaniye/" class="sub-menu__link<?= (SITE_DIR.'oborudovaniye/' === $APPLICATION->GetCurPage(false)) ? ' active' : false; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('ALL_EQUIPMENT'); ?></a>
                        <?php foreach ($arResult['SECTIONS'] as $key => $value): ?>
                            <a href="<?= $value['SECTION_PAGE_URL']; ?>" class="sub-menu__link<?= ($value['SECTION_PAGE_URL'] === $APPLICATION->GetCurPage(false)) ? ' active' : false; ?>"><?= $value['NAME']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
