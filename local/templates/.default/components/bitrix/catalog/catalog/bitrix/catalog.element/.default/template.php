<?php
/**
 * @var $arResult
 */
$this->setFrameMode(true);
?>

<!-- goals constants init -->
<?
switch ($arResult['SECTION']['CODE']) {

    case "mini-pogruzchiki":
        $yandexInterestGoal = "ret.minipog";
        $googleInterestGoal = "minipog";
        break;

    case "vakuumnye-podmetalno-uborochnye-mashiny":
        $yandexInterestGoal = "ret.vpum";
        $googleInterestGoal = "vpum";
        break;

    case "kombinirovannye-dorozhnye-mashiny":
        $yandexInterestGoal = "ret.kdm";
        $googleInterestGoal = "kdm";
        break;

    case "avtogudronatory":
        $yandexInterestGoal = "ret.avtogud";
        $googleInterestGoal = "avtogud";
        break;

    case "chipsilery":
        $yandexInterestGoal = "ret.chipsil";
        $googleInterestGoal = "chipsil";
        break;

    case "snegopogruzchiki":
        $yandexInterestGoal = "ret.sneg";
        $googleInterestGoal = "sneg";
        break;

    default:
        $yandexInterestGoal = false;
        $googleInterestGoal = false;

}
?>
<script>
    const YANDEX_INTEREST_GOAL = '<?=$yandexInterestGoal?>';
    const GOOGLE_INTEREST_GOAL = '<?=$googleInterestGoal?>';
</script>
<!-- goals constants init -->

<div class="preview card-preview">
    <div class="wrapper wrapper_default">
        <div class="preview__top">
            <div class="preview__row preview__row_flex">
                <div class="preview__nav preview__nav_left">
                    <?php if (!empty($arResult['PREV'])): ?>
                        <a href="<?= $arResult['PREV']['DETAIL_PAGE_URL']; ?>" class="preview-link preview-link_prev">
                            <span class="preview__img">
                                <?php if (!empty($arResult['PREV']['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['PREV']['DETAIL_PICTURE'], 235, 140); ?>" alt="<?= $arResult['PREV']['NAME']; ?>">
                                <?php elseif (!empty($arResult['PREV']['PREVIEW_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['PREV']['PREVIEW_PICTURE'], 235, 140); ?>" alt="<?= $arResult['PREV']['NAME']; ?>">
                                <?php else: ?>
                                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/no-image.jpg" alt="<?= $arResult['PREV']['NAME']; ?>">
                                <?php endif; ?>
                            </span>
                            <span class="preview-link__title iconed iconed_center iconed__ico_r-small">
                                <svg class="iconed_ico vector-arrow-ico iconed__ico_r-small">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vector-arrow-l-ico"></use>
                                </svg>
                                <span class="preview-link__text title title_m title_upper title_grey title_demi"><?= $arResult['PREV']['NAME']; ?></span>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="card-preview__item">
                    <div class="card-gen">
                        <div class="card-gen__img">
                            <div class="stickers card-gen__stickers">
                                <a href="<?= SITE_DIR; ?>o-zavode/test-drive/" class="sticker sticker_offset interest-goal">
                                    <span class="sticker__content">
                                        <span class="sticker__title"><?= Bitrix\Main\Localization\Loc::getMessage('TEST_DRIVE'); ?></span>
                                    </span>
                                    <span class="sticker__ico">
                                        <svg class="iconed_ico rule-ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#rule-ico"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href="<?= SITE_DIR; ?>prodazha-v-regionakh/" class="sticker sticker_offset interest-goal">
                                    <span class="sticker__content">
                                        <span class="sticker__title"><?= Bitrix\Main\Localization\Loc::getMessage('SALE_IN_REGIONS'); ?></span>
                                    </span>
                                    <span class="sticker__ico">
                                        <svg class="iconed_ico rule-ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#loc-circle-ico"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href="<?= SITE_DIR; ?>servis/lizing/" class="sticker sticker_offset rouble-goal">
                                    <span class="sticker__content">
                                        <span class="sticker__title"><?= Bitrix\Main\Localization\Loc::getMessage('BY_LEASING'); ?></span>
                                    </span>
                                    <span class="sticker__ico">
                                        <svg class="iconed_ico rub-ico">
                                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#rub-circle-ico"></use>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="card-gen__pic">
                                <?php if (!empty($arResult['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['DETAIL_PICTURE'], 1043, 757); ?>" alt="<?= $arResult['NAME']; ?>">
                                <?php else: ?>
                                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/no-image.jpg" alt="<?= $arResult['NAME']; ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preview__nav preview__nav_right">
                    <?php if (!empty($arResult['NEXT'])): ?>
                        <a href="<?= $arResult['NEXT']['DETAIL_PAGE_URL']; ?>" class="preview-link preview-link_next">
                            <span class="preview__img">
                                <?php if (!empty($arResult['NEXT']['DETAIL_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['NEXT']['DETAIL_PICTURE'], 235, 140); ?>" alt="<?= $arResult['NEXT']['NAME']; ?>">
                                <?php elseif (!empty($arResult['NEXT']['PREVIEW_PICTURE'])): ?>
                                    <img src="<?= resizeImage($arResult['NEXT']['PREVIEW_PICTURE'], 235, 140); ?>" alt="<?= $arResult['NEXT']['NAME']; ?>">
                                <?php else: ?>
                                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/no-image.jpg" alt="<?= $arResult['NEXT']['NAME']; ?>">
                                <?php endif; ?>
                            </span>
                            <span class="preview-link__title iconed iconed_center iconed__ico_r-small">
                                <span class="preview-link__text title title_m title_upper title_grey title_demi"><?= $arResult['NEXT']['NAME']; ?></span>
                                <svg class="iconed_ico vector-arrow-ico vector-arrow-ico_reverce iconed__ico_l-small">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vector-arrow-r-ico"></use>
                                </svg>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="preview-char">
                <h1 class="h2 preview-char__title"><?= $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']; ?></h1>
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
                <?php if(!empty($arResult['PROPERTIES']['PRICE']['VALUE'])): ?>
                    <a data-src="#callback" href="javascript:;" class="preview-price phone-popup-trigger">
                        <span class="preview-price__content">
                            <span class="preview-price__title title title_block"><?= Bitrix\Main\Localization\Loc::getMessage('FROM'); ?> <?= number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' '); ?> <span class="rub">₽</span></span>
                            <span class="preview-price__desc"><?= Bitrix\Main\Localization\Loc::getMessage('VARIABLE'); ?></span>
                        </span>
                        <svg class="preview-arrow arrow-right-ico">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-right-slim-ico"></use>
                        </svg>
                    </a>
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
                        <?php if (!empty($arResult['PROPS'])): ?>
                            <a href="#props" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_PROPS'); ?></a>
                        <?php endif; ?>
                        <a href="#desc" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_DESCRIPTION'); ?></a>
                        <?php if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])): ?>
                            <a href="#gallery" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_GALLERY'); ?></a>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['ADVANTAGES']['VALUE'])): ?>
                            <a href="#advant" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_ADV'); ?></a>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['ADDITIONAL_SPEC']['VALUE'])): ?>
                            <a href="#fetures" class="sub-menu__link anchor-js"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_FEATURES'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="sub-menu__controls">
                        <a href="javascript:;" data-src="#leasing" data-item="<?= $arResult['NAME']; ?>"
                           class="btn btn_box btn_transparent phone-popup-trigger leasing-trigger">
                            <?= Bitrix\Main\Localization\Loc::getMessage('LEASING_REQUEST'); ?>
                        </a>
                        <?php /*if ($arResult['IBLOCK_SECTION_ID'] == 1): ?>
                            <a href="<?= SITE_DIR; ?>configurator/" class="btn btn_box btn_blue"><?= Bitrix\Main\Localization\Loc::getMessage('CONFIGURATOR'); ?></a>
                        <?php endif;*/ ?>
                        <a href="javascript:;" data-src="#callback" class="btn btn_box btn_orange phone-popup-trigger">
                            <?= Bitrix\Main\Localization\Loc::getMessage('CONSULT_REQUEST'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-mobile-nav">
    <div class="btns btns_center">
        <a href="javascript:;" data-src="#leasing" class="btns__item btn btn_box btn_blue phone-popup-trigger leasing-trigger" data-item="<?= $arResult['NAME']; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('LEASING_REQUEST'); ?></a>
        <a href="<?= SITE_DIR; ?>configurator/" class="btns__item btn btn_box btn_blue"><?= Bitrix\Main\Localization\Loc::getMessage('CONFIGURATOR'); ?></a>
        <a href="javascript:;" data-src="#callback" class="btns__item btn btn_box btn_orange phone-popup-trigger"><?= Bitrix\Main\Localization\Loc::getMessage('CONSULT_REQUEST'); ?></a>
    </div>
</div>
<div class="section section_animated secton_b-small wow " id="model">
    <div class="wrapper wrapper_default">
        <div class="feature">
            <div class="row">
                <div class="col col--xl-5">
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
                            <?php if (!empty($arResult['PDF'])): ?>
                                <div class="col col--lg-6">
                                    <a href="<?= $arResult['PDF']['SRC']; ?>" class="doc-pdf iconed iconed_center interest-goal" download="<?= $arResult['PDF']['ORIGINAL_NAME']; ?>">
                                        <img class="iconed__ico doc-pdf__ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/pdf.svg" alt="">
                                        <span class="doc-pdf__content">
                                            <span class="doc-pdf__title title title_demi title_small-offset"><?= Bitrix\Main\Localization\Loc::getMessage('DOWNLOAD_PDF'); ?></span>
                                            <span class="doc-pdf__desc title title_demi"><?= humanFileSize($arResult['PDF']['FILE_SIZE']); ?>, PDF</span>
                                        </span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($arResult['PROPERTIES']['SEASON']['VALUE'])): ?>
                                <div class="col col--lg-3">
                                    <?php if (in_array('Для зимы', $arResult['PROPERTIES']['SEASON']['VALUE'])
                                        || in_array('For winter', $arResult['PROPERTIES']['SEASON']['VALUE'])): ?>
                                        <span class="season-item season-item_offset iconed iconed_center">
                                            <img class="iconed__ico season-item__ico iconed__ico_r-default" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/cloude-blue.svg" alt="">
                                            <span class="season-item__title title title_black"><?= Bitrix\Main\Localization\Loc::getMessage('FOR_WINTER'); ?></span>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (in_array('Для лета', $arResult['PROPERTIES']['SEASON']['VALUE'])
                                        || in_array('For summer', $arResult['PROPERTIES']['SEASON']['VALUE'])): ?>
                                        <span class="season-item iconed iconed_center">
                                            <img class="iconed__ico season-item__ico iconed__ico_r-default" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/sun-ico.svg" alt="">
                                            <span class="season-item__title title title_black"><?= Bitrix\Main\Localization\Loc::getMessage('FOR_SUMMER'); ?></span>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($arResult['PROPERTIES']['GAS']['VALUE'])): ?>
                                <div class="col col--lg-3">
                                    <div class="fuel-type fuel-type_center">
                                        <span class="fuel-type__ico fuel-type__ico_blue iconed__ico_r-small">
                                            <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/gaz-fuel.svg" alt="">
                                        </span>
                                        <span class="fuel-type__title"><?= Bitrix\Main\Localization\Loc::getMessage('GAS'); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (!empty($arResult['PROPS'])): ?>
                    <div id="props" class="col col--xl-offset-1 col--xl-6">
                        <div class="tab-widget feature-tab">
                            <div class="tab-widget__scroll">
                                <div class="tab-widget__nav feature-tab__nav">
                                    <?php foreach ($arResult['PROPS'] as $key => $value): ?>
                                        <?php if (!empty($value['ELEMENTS'])): ?>
                                            <button type="button" class="feature-tab__link tab-widget__link<?= ($key === 0) ? ' active' : false; ?> interest-goal">
                                                <?= $value['NAME']; ?>
                                            </button>
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

<div class="section section_animated secton_b-small wow ">
    <div class="wrapper wrapper_default">
        <div class="card-desc" id="desc">
            <div class="row">
                <div class="col col--lg-6 col--md-8">
                    <div class="card-desc__item">
                        <h3 class="h3 title title_b-offset"><?= Bitrix\Main\Localization\Loc::getMessage('DESCRIPTION'); ?></h3>
                        <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
                            <div class="paragraph"><?= $arResult['DETAIL_TEXT']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($arResult['PROPERTIES']['DESC_IMAGES']['VALUE'])): ?>
                    <div class="col col--lg-6 col--md-12">
                        <div class="additional-description">
                            <?php foreach ($arResult['PROPERTIES']['DESC_IMAGES']['VALUE'] as $key => $value): ?>
                                <div class="additional-description__item<?= ($key === 0) ? ' first-item' : ' other'; ?>" style="background-image: url('<?= \CFile::GetFileSRC(\CFile::GetFileArray($value)); ?>')">
                                    <div class="additional-description__item_description"><?= $arResult['PROPERTIES']['DESC_IMAGES']['~DESCRIPTION'][$key]; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($arResult['YOUTUBE'])): ?>
    <div class="section section_animated secton_b-small secton_b-none wow from-youtube" style="background-image: url('<?= $arResult['YOUTUBE']['COVERS']['MAX_HIGH']; ?>')">
        <div class="video-widget">
            <a data-fancybox="video" href="<?= $arResult['YOUTUBE']['VIDEO']; ?>" class="video-popup__link">
                <span class="play-circle iconed__ico play-circle_r-offset play-circle_blue video-widget__play"></span>
            </a>
            <?php if (!empty($arResult['YOUTUBE']['DATA'])): ?>
                <div class="video-widget__content">
                    <div class="wrapper wrapper_default">
                        <h2 class="h2 video-widget__title video-widget__title_white"><?= $arResult['YOUTUBE']['DATA']['title']; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php elseif (!empty($arResult['VIDEO'])): ?>
    <div class="section section_animated secton_b-small secton_b-none wow ">
        <div class="video-widget">
            <a data-fancybox="video" href="<?= $arResult['VIDEO']['SRC']; ?>" class="video-popup__link">
                <span class="play-circle iconed__ico play-circle_r-offset play-circle_blue video-widget__play"></span>
            </a>
            <?php if (!empty($arResult['VIDEO']['DESCRIPTION'])): ?>
                <div class="video-widget__content">
                    <div class="wrapper wrapper_default">
                        <h2 class="h2 video-widget__title video-widget__title_white"><?= $arResult['VIDEO']['DESCRIPTION']; ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <video autoplay muted loop class="video-widget__bg video-js vjs-default-skin" data-setup='{"fluid": true}'>
                <source src="<?= $arResult['VIDEO']['SRC']; ?>" type="<?= $arResult['VIDEO']['CONTENT_TYPE']; ?>">
            </video>
        </div>
    </div>
<?php endif; ?>

<?php if(!empty($arResult['PROPERTIES']['GALLERY']['VALUE']) || !empty($arResult['PROPERTIES']['RELIABILITY']['VALUE'])): ?>
    <div class="section section_default section_animated wow">
        <div class="card-preim">
            <?php if (!empty($arResult['PROPERTIES']['RELIABILITY']['VALUE'])): ?>
                <div class="wrapper wrapper_default">
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
                <div id="gallery" class="work-widget">
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
                                    <img class="work-slider__pic" src="<?= resizeImage($value, 1172, 450); ?>" alt="">
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
    <div id="advant" class="section section_default section_animated wow">
        <div class="car-preim">
            <div class="wrapper wrapper_default">
                <h2 class="card-preim__title title  title_big-offset"><?= Bitrix\Main\Localization\Loc::getMessage('ADVANTAGES'); ?></h2>
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
                        <div class="col col--lg-5<?= !empty($arResult['PROPERTIES']['ADVANTAGES_IMG']['VALUE']) ? ' col--lg-offset-1' : false; ?>">
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

<?php if (!empty($arResult['PROPERTIES']['ADDITIONAL_SPEC']['VALUE'])): ?>
    <div class="section section_animated secton_b-small wow  animated" style="visibility: visible;">
        <div class="wrapper wrapper_default">
            <div class="card-desc" id="fetures">
                <div class="row">
                    <div class="col col--lg-12 col--md-12">
                        <div class="card-desc__item">
                            <h3 class="h3 title title_b-offset"><?= Bitrix\Main\Localization\Loc::getMessage('MENU_FEATURES'); ?></h3>
                            <div class="paragraph"><?= $arResult['PROPERTIES']['ADDITIONAL_SPEC']['~VALUE']['TEXT']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
$this->addExternalJs('https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.all.min.js', true);
$this->addExternalCss('https://cdn.jsdelivr.net/npm/sweetalert2@8.18.6/dist/sweetalert2.min.css', true);
$this->addExternalCss(SITE_DEFAULT_TEMPLATE_PATH . '/css/sweetalert-custom.css', true);
?>

<script>
    let compareObj = <?= json_encode($arResult); ?>;
</script>
