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
    <div class="top-nav top-nav_centered top-nav_bordered sub-menu stick-menu">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--lg-10 col--lg-offset-1">
                    <div class="sub-menu__content custom-scroll-x sub-menu__content_center">
                        <a href="<?= SITE_DIR; ?>novosti/" class="sub-menu__link<?= ($APPLICATION->GetCurPage(false) === SITE_DIR.'novosti/') ? ' active' : false; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('ALL_POSTS'); ?></a>
                        <?php foreach ($arResult['SECTIONS'] as $key => $value): ?>
                            <a href="<?= $value['SECTION_PAGE_URL']; ?>" class="sub-menu__link<?= ($APPLICATION->GetCurPage(false) === $value['SECTION_PAGE_URL']) ? ' active' : false; ?>"><?= $value['NAME']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
