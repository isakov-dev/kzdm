<?php
$this->setFrameMode(true);
?>
<div id="model" class="preview card-preview">
    <div class="wrapper wrapper_default">
        <div class="preview__top">
            <div class="preview__row preview__row_flex">
                <?php if (!empty($arResult['PREV'])): ?>
                    <div class="preview__nav preview__nav_left">
                        <a href="<?= $arResult['PREV']['DETAIL_PAGE_URL']; ?>" class="preview-link preview-link_prev">
                            <span class="preview__img">
                                <?php if (!empty($arResult['PREV']['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['PREV']['DETAIL_PICTURE'], 235, 140); ?>" alt="<?= $arResult['PREV']['NAME']; ?>">
                                <?php elseif (!empty($arResult['PREV']['PREVIEW_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['PREV']['PREVIEW_PICTURE'], 235, 140); ?>" alt="<?= $arResult['PREV']['NAME']; ?>">
                                <?php else: ?>
                                <?php endif; ?>
                            </span>
                            <span class="preview-link__title iconed iconed_center iconed__ico_r-small">
                                <svg class="iconed_ico vector-arrow-ico iconed__ico_r-small">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vector-arrow-l-ico"></use>
                                </svg>
                                <span class="preview-link__text title title_m title_upper title_grey title_demi"><?= $arResult['PREV']['NAME']; ?></span>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="card-preview__item">
                    <div class="card-gen">
                        <div class="card-gen__img">
                            <div class="stickers card-gen__stickers">
                                <div class="sticker sticker_offset">
                                    <span class="sticker__content">
                                        <span class="sticker__title"><?= Bitrix\Main\Localization\Loc::getMessage('SALE_IN_REGIONS'); ?></span>
                                    </span>
                                    <span class="sticker__ico">
                                        <svg class="iconed_ico rule-ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#loc-circle-ico"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="sticker sticker_offset">
                                    <span class="sticker__content">
                                        <span class="sticker__title"><?= Bitrix\Main\Localization\Loc::getMessage('BY_LEASING'); ?></span>
                                    </span>
                                    <span class="sticker__ico">
                                        <svg class="iconed_ico rub-ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#rub-circle-ico"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="card-gen__pic">
                                <?php if (!empty($arResult['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['DETAIL_PICTURE'], 1043, 757); ?>" alt="<?= $arResult['NAME']; ?>">
                                <?php else: ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($arResult['NEXT'])): ?>
                    <div class="preview__nav preview__nav_right">
                        <a href="<?= $arResult['NEXT']['DETAIL_PAGE_URL']; ?>" class="preview-link preview-link_next">
                            <span class="preview__img">
                                <?php if (!empty($arResult['NEXT']['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['NEXT']['DETAIL_PICTURE'], 235, 140); ?>" alt="<?= $arResult['NEXT']['NAME']; ?>">
                                <?php elseif (!empty($arResult['NEXT']['PREVIEW_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['NEXT']['PREVIEW_PICTURE'], 235, 140); ?>" alt="<?= $arResult['NEXT']['NAME']; ?>">
                                <?php else: ?>
                                <?php endif; ?>
                            </span>
                            <span class="preview-link__title iconed iconed_center iconed__ico_r-small">
                                <span class="preview-link__text title title_m title_upper title_grey title_demi"><?= $arResult['NEXT']['NAME']; ?></span>
                                <svg class="iconed_ico vector-arrow-ico vector-arrow-ico_reverce iconed__ico_l-small">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vector-arrow-r-ico"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="preview-char">
                <h1 class="preview-char__title"><?= $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']; ?></h1>
                <?php if (!empty($arResult['PROPERTIES']['MAIN_PROPS']['VALUE'])): ?>
                    <div class="preview-char__items">
                        <?php foreach ($arResult['PROPERTIES']['MAIN_PROPS']['VALUE'] as $key => $value): ?>
                            <div class="char-item char-item_offset">
                                <h3 class="h3 char-item__title"><?= $value; ?></h3>
                                <span class="title title_large title_grey char-item__desc"><?= $arResult['PROPERTIES']['MAIN_PROPS']['DESCRIPTION'][$key]; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="top-nav top-nav_w-controls top-nav_widget top-nav_bordered sub-menu stick-menu stick-menu_fixed">
    <div class="wrapper wrapper_default">
        <div class="row">
            <div class="col col--lg-12">
                <div class="sub-menu-widget">
                    <div class="sub-menu__content custom-scroll-x">
                        <a href="#model" class="sub-menu__link anchor-js active"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_MODEL'); ?></a>
                        <a href="#description" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_DESCRIPTION'); ?></a>
                        <a href="#properties" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_PROPS'); ?></a>
                        <a href="#" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_ADV'); ?></a>
                        <a href="#advantages" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_FEATURES'); ?></a>
                        <a href="#gall" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_GALLERY'); ?></a>
                    </div>
                    <div class="sub-menu__controls">
                        <a href="javascript:;" data-src="#parts" class="btn btn_box btn_orange phone-popup-trigger parts-trigger" data-item="<?= $arResult['NAME']; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('REQUEST_BTN'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-mobile-nav">
    <div class="btns btns_center">
        <a href="javascript:;" data-src="#parts" class="btn btn_box btn_orange phone-popup-trigger parts-trigger" data-item="<?= $arResult['NAME']; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('REQUEST_BTN'); ?></a>
    </div>
</div>
<div id="properties" class="section section_animated secton_b-small wow">
    <div class="wrapper wrapper_default">
        <div class="feature">
            <div class="row">
                <div class="col col--lg-5">
                    <?php if (!empty($arResult['PROPERTIES']['LESS_TEXT']['VALUE'])): ?>
                        <div class="feature-desc h3 title title_medium title_big-offset"><?= $arResult['PROPERTIES']['LESS_TEXT']['VALUE']['TEXT']; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($arResult['BLUEPRINTS'])):
                        $bp = $arResult['BLUEPRINTS'];
                        $firstBlueprint = array_pop($arResult['BLUEPRINTS']);
                        ?>
                        <div class="feature__box box box_middle-b">
                            <div class="tile-gallery">
                                <a href="<?= $firstBlueprint['SRC']; ?>" data-fancybox="gallery" class="tile-gallery__item tile-gallery__item_big">
                                    <img src="<?= resizeImage($firstBlueprint, 330, 120); ?>" alt="<?= $arResult['NAME']; ?>">
                                </a>
                                <?php if (count($arResult['PROPERTIES']['BLUEPRINTS']['VALUE']) > 1): ?>
                                    <div class="tile-gallery__other">
                                        <?php foreach ($arResult['BLUEPRINTS'] as $key => $value): ?>
                                            <?php if ($key + 1 <= 3): ?>
                                                <a href="<?= $value['SRC']; ?>" data-fancybox="gallery" class="tile-gallery__item">
                                                    <img src="<?= resizeImage($value, 124, 88); ?>" alt="<?= $arResult['NAME']; ?>">
                                                </a>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if (count($arResult['PROPERTIES']['BLUEPRINTS']['VALUE']) > 4): ?>
                                            <a href="<?= $arResult['BLUEPRINTS'][3]['SRC']; ?>" data-fancybox="gallery" class="tile-gallery__item galley-more">
                                                <?php
                                                $countBlueprintMsg = explode(' ', pluralForm(count(array_slice($arResult['PROPERTIES']['BLUEPRINTS']['VALUE'], 4)), [Bitrix\Main\Localization\Loc::getMessage('BLUEPRINT'), Bitrix\Main\Localization\Loc::getMessage('BLUEPRINTS_FEW'), Bitrix\Main\Localization\Loc::getMessage('BLUEPRINTS_MANY')]));
                                                ?>
                                                <span class="galley-more__content">
                                                    <span class="galley-more__numb">+<?= $countBlueprintMsg[0]; ?></span>
                                                    <span class="galley-more__title"><?= $countBlueprintMsg[1]; ?></span>
                                                </span>
                                            </a>
                                            <?php foreach (array_slice($bp, 4) as $key => $value): ?>
                                                <a class="gallery-hide" href="<?= $value['SRC']; ?>" data-fancybox="gallery"></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="feature__box box box_middle-b">
                        <div class="row row_micro feature__nav">
                            <div class="col col--lg-6">
                                <?php if (!empty($arResult['PDF'])): ?>
                                    <a href="<?= $arResult['PDF']['SRC']; ?>" class="doc-pdf iconed iconed_center" download="<?= $arResult['PDF']['ORIGINAL_NAME']; ?>">
                                        <img class="iconed__ico doc-pdf__ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/pdf.svg" alt="">
                                        <span class="doc-pdf__content">
                                            <span class="doc-pdf__title title title_demi title_small-offset"><?= Bitrix\Main\Localization\Loc::getMessage('DOWNLOAD_PDF'); ?></span>
                                            <span class="doc-pdf__desc title title_demi"><?= humanFileSize($arResult['PDF']['FILE_SIZE']); ?>, PDF</span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (!empty($arResult['PROPS'])): ?>
                    <div class="col col--xl-offset-1 col--xl-6">
                        <div class="tab-widget feature-tab">
                            <div class="tab-widget__scroll">
                                <div class="tab-widget__nav feature-tab__nav">
                                    <?php foreach ($arResult['PROPS'] as $key => $value): ?>
                                        <?php if (!empty($value['ELEMENTS'])): ?>
                                            <button type="button" class="feature-tab__link tab-widget__link<?= ($key === 0) ? ' active' : false; ?>"><?= $value['NAME']; ?></button>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-widget__content">
                                <?php foreach ($arResult['PROPS'] as $key => $value): ?>
                                    <?php if (!empty($value['ELEMENTS'])): ?>
                                        <div class="tab<?= ($key === 0) ? ' active' : false; ?>">
                                            <div class="feature-tab__content">
                                                <div class="table feature-table">
                                                    <?php foreach ($value['ELEMENTS'] as $element): ?>
                                                        <div class="table__row">
                                                            <div class="table__td">
                                                                <div class="feature-table__content"><?= $element['NAME']; ?></div>
                                                            </div>
                                                            <div class="table__td">
                                                                <div class="feature-table__content"><?= $element['PROPERTY_VALUE_VALUE']; ?></div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div id="description" class="section section_animated secton_b-small wow ">
    <div class="wrapper wrapper_default">
        <div class="card-desc" id="DESC">
            <div class="row">
                <div class="col col--lg-12">
                    <div class="card-desc__item">
                        <h3 class="h3 title title_b-offset"><?= Bitrix\Main\Localization\Loc::getMessage('DESCRIPTION'); ?></h3>
                        <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
                            <div class="paragraph"><?= $arResult['DETAIL_TEXT']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(!empty($arResult['PROPERTIES']['GALLERY']['VALUE']) || !empty($arResult['PROPERTIES']['RELIABILITY']['VALUE'])): ?>
    <div class="section section_default section_animated wow">
        <div class="card-preim">
            <?php if (!empty($arResult['PROPERTIES']['RELIABILITY']['VALUE'])): ?>
                <div id="advantages" class="wrapper wrapper_default">
                    <h2 class="card-preim__title title title_centered title_big-offset"><?= Bitrix\Main\Localization\Loc::getMessage('RELIABILITY_AND_EFFICIENCY'); ?></h2>
                    <div class="box box_offset">
                        <div class="row">
                            <div class="col col--xl-8 col--xl-offset-2">
                                <div class="row row_center">
                                    <?php foreach ($arResult['PROPERTIES']['RELIABILITY']['VALUE'] as $key => $value): ?>
                                        <div class="col col--lg-3 col--sm-6">
                                            <div class="card-preim__item card-preim__item_offset">
                                                <img class="card-preim__ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/ok-ico.svg" alt="<?= $value; ?>">
                                                <div class="card-preim__content">
                                                    <span class="card-preim__subtitle title title_demi title_block title_small-offset"><?= $value; ?></span>
                                                    <div class="card-preim__desc title title_m title_centered title_grey">
                                                        <p><?= $arResult['PROPERTIES']['RELIABILITY']['DESCRIPTION'][$key]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($arResult['PROPERTIES']['GALLERY'])): ?>
                <div id="gall" class="work-widget">
                    <div class="work-widget__nav">
                        <div class="wrapper wrapper_default">
                            <div class="work-widget__arrows">
                                <a href="#" class="work-widget__arrow work-widget__arrow_left work-left">
                                    <svg class="work-arrow work-arrow-left">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-left-ico"></use>
                                    </svg>
                                </a>
                                <a href="#" class="work-widget__arrow work-widget__arrow_right work-right">
                                    <svg class="work-arrow work-arrow-right">
                                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-right-ico"></use>
                                    </svg>
                                    <svg viewBox="0 0 36 36" class="circular-chart" data-speed="5000">
                                        <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="work-slider slider">
                        <?php foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $value): ?>
                            <div>
                                <div class="work-slider__item">
                                    <img class="work-slider__pic" src="<?= resizeImage($value, 1172, 640, BX_RESIZE_IMAGE_EXACT); ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (!empty($arResult['PROPERTIES']['ADVANTAGES']['VALUE']) || !empty($arResult['PROPERTIES']['ADVANTAGES_IMG']['VALUE'])): ?>
    <div class="section section_default section_animated wow">
        <div class="car-preim">
            <div class="wrapper wrapper_default">
                <h5 class="h5 section__cat title title_upper title_grey title_block title_demi title_b-none"><?= Bitrix\Main\Localization\Loc::getMessage('ADVANTAGES'); ?></h5>
                <h2 class="card-preim__title title  title_big-offset"><?= Bitrix\Main\Localization\Loc::getMessage('RELIABILITY_AND_EFFICIENCY'); ?></h2>
                <div class="row">
                    <?php if (!empty($arResult['PROPERTIES']['ADVANTAGES_IMG']['VALUE'])): ?>
                        <div class="col col--lg-6 ">
                            <div class="stick">
                                <div class="car-preim__img">
                                    <img class="car-preim__pic" src="<?= resizeImage($arResult['PROPERTIES']['ADVANTAGES_IMG']['VALUE'], 872, 640); ?>" alt="преимущества">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($arResult['PROPERTIES']['ADVANTAGES']['VALUE'])): ?>
                        <div class="col col--lg-5 col--lg-offset-1">
                            <div class="car-preim__items">
                                <?php foreach ($arResult['PROPERTIES']['ADVANTAGES']['VALUE'] as $key => $value): ?>
                                    <div class="car-preim__item car-preim__item_offset iconed iconed_start">
                                        <img class="iconed__ico car-preim__ico iconed__ico_r-medium " src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/ok-ico.svg" alt="<?= $value; ?>">
                                        <div class="car-preim__cotnent">
                                            <h4 class="car-preim__title title title_demi title_small-offset"><?= $value; ?></h4>
                                            <?php if (!empty($arResult['PROPERTIES']['ADVANTAGES']['DESCRIPTION'][$key])): ?>
                                                <div class="car-preim__desc title title_grey">
                                                    <p><?= $arResult['PROPERTIES']['ADVANTAGES']['DESCRIPTION'][$key]; ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
