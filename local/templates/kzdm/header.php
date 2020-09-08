<?php
Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?= $APPLICATION->GetLang()['LANGUAGE_ID']; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php $APPLICATION->ShowTitle(); ?></title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <?php
        $APPLICATION->ShowLink('canonical', null);
        $APPLICATION->ShowMeta('keywords', false);
        $APPLICATION->ShowMeta('description', false);
        $APPLICATION->ShowCSS(true);
        $APPLICATION->ShowHeadStrings();
        $APPLICATION->ShowHeadScripts();

        \Bitrix\Main\Page\Asset::getInstance()->addCss('https://unpkg.com/tippy.js@6/animations/scale.css');
        \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/styles.css');
        \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/custom.css');
        \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/custom2.css');
        \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/sweetalert-custom.css');

        \Bitrix\Main\Page\Asset::getInstance()->addJs('https://unpkg.com/@popperjs/core@2');
        \Bitrix\Main\Page\Asset::getInstance()->addJs('https://unpkg.com/tippy.js@6');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/js.cookie.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery-2.2.4.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/slick.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/ScrollMagic.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/animation.gsap.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/TweenMax.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/debug.addIndicators.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.viewportchecker.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.matchHeight.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.fancybox.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/video.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/wow.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.sticky-kit.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.mCustomScrollbar.concat.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.fileuploader.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.inputmask.bundle.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/SmoothScroll.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/jquery.sticky.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/ScrollMagic.min.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/100years.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/main.js');
        \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/custom.js');
        ?>
        <script data-skip-moving="true">
            const cookieDomain = '<?= sprintf('.%s', DOMAIN); ?>';
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116744247-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-116744247-1');
        </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBV39PJ');</script>
<!-- End Google Tag Manager -->
    </head>
    <body class="<?php $APPLICATION->ShowProperty('error-404'); ?><?= $APPLICATION->GetCurPage(false) == SITE_DIR ? ' homepage' : false; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBV39PJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <?php $APPLICATION->ShowPanel(); ?>
        <header class="header<?= ($APPLICATION->GetCurPage(false) == SITE_DIR) ? ' header-index' : ' active'; ?>">
            <div class="wrapper wrapper_default">
                <div class="header__content">
                    <div class="header__left">
                        <a href="<?= SITE_DIR; ?>" class="logo header__logo">
                            <img class="logo__pic" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-white-en.svg' : 'logo-main-white.svg'; ?>" alt="">
                            <img class="logo__pic" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-en.svg' : 'logo-main.svg'; ?>" alt="">
                        </a>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y"
                            )
                        );?>
                    </div>
                    <div class="header__right">
                        <?php $APPLICATION->IncludeComponent('sunmedia:geolocation.city', '', [
                            'IBLOCK_ID' => 16
                        ]); ?>
                        <div class="search header__search">
                            <a href="javascript:;" data-src="#search" class="search-popup-trigger search__btn">
                                <svg class="loop-ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#loop-ico"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="phone header__phone iconed iconed_center">
                            <svg class="phone-ico iconed__ico_r-default">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#smart-circle"></use>
                            </svg>
                            <div class="phone__content">
                                <a href="tel:88003509580" class="phone__numb">8 800 350 95 80</a>
                                <a data-src="#callback" href="javascript:;" class="phone-popup-trigger"><?= Bitrix\Main\Localization\Loc::getMessage('CALLBACK'); ?></a>
                            </div>
                            <button class="header-btn header-btn_offset window-trigger-imagered" data-src="#window">
                                <span class="header-btn__line"></span>
                                <span class="header-btn__line"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="mobile">
            <?php $APPLICATION->IncludeComponent('sunmedia:geolocation.city', 'mobile', [
                'IBLOCK_ID' => 16
            ]); ?>
            <div class="mobile__top">
                <a href="javascript:;" data-src="#callback" class="mobile__callback mobile__callback_m phone-popup-trigger">
                    <svg class="phone-ico iconed__ico_r-default">
                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#smart-circle"></use>
                    </svg>
                </a>
                <div class="mobile__callback">
                    <svg class="phone-ico iconed__ico_r-default">
                        <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#smart-circle"></use>
                    </svg>
                    <div class="phone__content">
                        <a href="tel:88003509580" class="phone__numb">8 800 350 95 80</a>
                        <a data-src="#callback" href="javascript:;" class="phone-popup-trigger"><?= Bitrix\Main\Localization\Loc::getMessage('CALLBACK'); ?></a>
                    </div>
                </div>
                <a href="<?= SITE_DIR; ?>" class="logo mobile__logo">
                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/mobile-logo.svg" alt="">
                </a>
                <div class="mobile__controls">
                    <button data-src="#search" class="search__btn search-popup-trigger">
                        <svg class="loop-ico loop-ico_black">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#loop-ico"></use>
                        </svg>
                    </button>
                    <button class="header-btn mobile-menu-js header-btn_black header-btn_offset">
                        <span class="header-btn__line"></span>
                        <span class="header-btn__line"></span>
                    </button>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header.pad",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>
            <div class="mobile__content">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "mobile",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y"
                    )
                );?>

                <div class="mobile__section">
                    <div class="phone phone__dark header__phone iconed iconed_center">
                        <svg class="phone-ico iconed__ico_r-default">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#smart-circle"></use>
                        </svg>
                        <div class="phone__content">
                            <a href="tel:88003509580" class="phone__numb">8 800 350 95 80</a>
                            <a data-src="#callback" href="javascript:;" class="phone__callback phone__callback_blue phone-popup-trigger ">
                                <?= Bitrix\Main\Localization\Loc::getMessage('CALLBACK'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" mobile-contacts">
                    <div class="mobile-contacts__item">
                        <a href="mailto:omis@kzdm.ru" class="mobile__mail">omis@kzdm.ru</a>
                    </div>
                    <div class="mobile-contacts__item">
                        <?php $APPLICATION->IncludeComponent('sunmedia:active.city', 'mobile', [
                            'IBLOCK_ID' => 16
                        ]); ?>
                    </div>
                </div>
                <div class="mobile-contacts mobile-contacts_b-offset">
                    <?php/*
                    <div class="mobile-contacts__item">
                        <div class="language iconed iconed_center">
                            <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                            <a class="language__content title title_medium" href="<?= SITE_ID == 'en' ? '/' : '/en/'; ?>"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></a>
                        </div>
                    </div>*/?>
                </div>

                <?php/*
                <a href="<?= SITE_DIR; ?>configurator/" class="conf-btn">
                    <span class="conf-btn__title">Конфигуратор</span>
                </a>*/?>
            </div>
        </header>

        <main class="main <?php $APPLICATION->ShowProperty('main_class'); ?>">
