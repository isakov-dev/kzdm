<?php
$this->setFrameMode(true);

$rsExtProps = CIBlockSection::GetList(array("SORT"=>"ASC"), array("IBLOCK_ID" =>
    $arResult['ORIGINAL_PARAMETERS']['IBLOCK_ID'], "ID" => $arResult['ORIGINAL_PARAMETERS']['SECTION_ID']),
    false, array("UF_SUBTITLE"));
while ($arExtProps = $rsExtProps->GetNext()) {
      $arResult["UF_SUBTITLE"] = $arExtProps["UF_SUBTITLE"];
}
?>
<?php if (!empty($arResult["UF_SUBTITLE"])): ?>
    <?php $this->SetViewTarget('page_description'); ?>
    <div class="single__desc">
        <p><?= $arResult["UF_SUBTITLE"]; ?></p>
    </div>
    <?php $this->EndViewTarget(); ?>
<?php endif; ?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div class="section section_default  section_animated wow">
        <div class="catalog">
            <div class="wrapper wrapper_default">
                <div class="cars">
                    <div class="row row_middle">
                        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
                            <div class="col col--lg-6">
                                <div class="car-article car-article_offset">
                                    <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="car-article__img">
                                        <?php if (!empty($value['PREVIEW_PICTURE'])): ?>
                                            <picture>
                                                <source media="(max-width: 575px)" srcset="<?= resizeImage($value['PREVIEW_PICTURE'], 295, 197); ?>">
                                                <img src="<?= resizeImage($value['PREVIEW_PICTURE'], 884, 497); ?>" alt="<?= $value['NAME']; ?>">
                                            </picture>
                                        <?php else: ?>
                                            <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/no-image-884.jpg" alt="<?= $value['NAME']; ?>">
                                        <?php endif; ?>
                                    </a>
                                    <div class="car-article__detail">
                                        <div class="car-article__header">
                                            <?php if (!empty($value['PROPS']['GAS']['VALUE'])): ?>
                                                <span class="sticker car-article__sticker" data-tippy-content="<?= Bitrix\Main\Localization\Loc::getMessage('WORK_ON_GAS'); ?>">
                                                    <svg class="sticker-fire">
                                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fire-ico"></use>
                                                    </svg>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (!empty($value['PROPS']['USE']['VALUE'])): ?>
                                                <span class="car-article__city car-article__item title title_block title_large title_grey"><?= implode(' / ', $value['PROPS']['USE']['VALUE']); ?></span>
                                            <?php endif; ?>
                                            <a href="<?= $value['DETAIL_PAGE_URL']; ?>" class="h4 title title_block  car-article__title title_bold car-article__item"><?= $value['NAME']; ?></a>
                                        </div>
                                        <?php if (!empty($value['PREVIEW_TEXT'])): ?>
                                            <div class="car-article__desc title title_large match-height" style="height: 38px;">
                                                <p><?= $value['PREVIEW_TEXT']; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?= $arResult['NAV_STRING']; ?>
                </div>
                <?if ($arResult['DESCRIPTION']) {?>
                    <div class="section__description">
                        <?=$arResult['DESCRIPTION']?>
                    </div>
                <?}?>
            </div>
        </div>
    </div>
<?php endif; ?>
