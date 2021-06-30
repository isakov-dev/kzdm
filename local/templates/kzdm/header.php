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

        $assetsCss = [
            'scale.css',
            'fancybox3.css',
            'styles.css',
            'custom.css',
            'custom2.css',
            'sweetalert-custom.css',
        ];

        foreach ($assetsCss as $css) {
            \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/' . $css);
        }

        $APPLICATION->ShowHeadScripts();

        $assetsJs = [
            'jquery-2.2.4.min.js',
            'popper.min.js',
            'tippy-bundle.umd.min.js',
            'js.cookie.min.js',
            'slick.js',
            'ScrollMagic.min.js',
            'animation.gsap.min.js',
            'TweenMax.min.js',
            'debug.addIndicators.min.js',
            'jquery.viewportchecker.min.js',
            'jquery.matchHeight.js',
            'jquery.fancybox.min.js',
            'wow.min.js',
            'jquery.sticky-kit.min.js',
            'jquery.mCustomScrollbar.concat.min.js',
            'jquery.fileuploader.min.js',
            'jquery.inputmask.bundle.min.js',
            'SmoothScroll.min.js',
            'jquery.sticky.js',
            'ScrollMagic.min.js',
            '100years.js',
            'main.js',
            'custom.js',
        ];

        foreach ($assetsJs as $js) {
            \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/' . $js);
        }
        ?>
        <script data-skip-moving="true">
            const cookieDomain = '<?= sprintf('.%s', DOMAIN); ?>';
        </script>

        <!-- PHP constants -->
        <script>
            const YANDEX_METRIKA_ID = <?=(YANDEX_METRIKA_ID ? YANDEX_METRIKA_ID : 'false')?>;
            const GOOGLE_ANALYTICS_ID = <?=(GOOGLE_ANALYTICS_ID ? "'" . GOOGLE_ANALYTICS_ID . "'" : 'false')?>;
        </script>
        <!-- PHP constants -->

        <?if (GOOGLE_ANALYTICS_ID) {?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=<?=GOOGLE_ANALYTICS_ID?>"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', '<?=GOOGLE_ANALYTICS_ID?>');
            </script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <?}?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TBV39PJ');</script>
        <!-- End Google Tag Manager -->

        <?if (GOOGLE_VERIFICATION) {?>
            <meta name="google-site-verification" content="<?=GOOGLE_VERIFICATION?>" />
        <?}?>

        <?if (CMSMAGAZINE) {?>
            <meta name="cmsmagazine" content="<?=CMSMAGAZINE?>" />
        <?}?>

        <?if (CLARITY) {?>
            <script type="text/javascript">
                (function(c,l,a,r,i,t,y){ c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i; y=l.getElementsByTagName(r)[0];
                y.parentNode.insertBefore(t,y); })(window, document, "clarity", "script", "<?=CLARITY?>");
            </script>
        <?}?>

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
                            <img class="logo__pic" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-white-en.svg' : 'logo-main-80-white.svg'; ?>" alt="">
                            <img class="logo__pic" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-en.svg' : 'logo-main-80.svg'; ?>" alt="">
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
                                "MENU_CACHE_TYPE" => (DOMAIN_ZONE == 'kz' ? "N" : "A"),
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y"
                            )
                        );?>
                    </div>
                    <div class="header__right">
                        <div class="header__region">
                            <div class="region-link">
                                <?php
                                $langNames = ['s1' => 'Ru', 'en' => 'En'];
                                ?>
                                <span class="region-link__el"><?= $langNames[SITE_ID]; ?><i class="i-arrow"></i></span>
                                <div class="region-link__dropdown">
                                    <?php
                                    $rsSites = CSite::GetList($by="sort", $order="desc", Array());
                                    while ($arSite = $rsSites->Fetch()) {
                                        if ($arSite['LID'] == SITE_ID)
                                            continue;
                                        ?>
                                        <a href="<?= $arSite['SITE_URL']; ?>" class="region-link__el"><?= $langNames[$arSite['LID']]; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
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
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#phone"></use>
                            </svg>
                            <div class="phone__content">
                                <a href="tel:<?=str_replace(' ', '', PHONE)?>" class="phone__numb"><?=PHONE?></a>
                                <a data-src="#callback" href="javascript:;" class="phone-popup-trigger"><?= Bitrix\Main\Localization\Loc::getMessage('CALLBACK'); ?></a>
                            </div>
                            <?php if (SITE_ID != 'en'): ?>
                            <button class="header-btn header-btn_offset window-trigger-imagered" data-src="#window">
                                <span class="header-btn__line"></span>
                                <span class="header-btn__line"></span>
                            </button>
                            <?php endif; ?>
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
                        <a href="tel:<?=str_replace(' ', '', PHONE)?>" class="phone__numb"><?=PHONE?></a>
                        <a data-src="#callback" href="javascript:;" class="phone-popup-trigger"><?= Bitrix\Main\Localization\Loc::getMessage('CALLBACK'); ?></a>
                    </div>
                </div>
                <a href="<?= SITE_DIR; ?>" class="logo mobile__logo">
                    <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/mobile-logo-80.svg" alt="">
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
                            <a href="tel:<?=str_replace(' ', '', PHONE)?>" class="phone__numb"><?=PHONE?></a>
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
                    <?if (SITE_ID != 'en') {?>
                        <div class="mobile-contacts__item">
                            <?php $APPLICATION->IncludeComponent('sunmedia:active.city', 'mobile', [
                                'IBLOCK_ID' => 16
                            ]); ?>
                        </div>
                    <?}?>
                </div>
                <div class="mobile-contacts mobile-contacts_b-offset">
                    <?php/*
                    <div class="mobile-contacts__item">
                        <div class="language iconed iconed_center">
                            <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                            <a class="language__content title title_medium" href="<?= SITE_ID == 'en' ? '/' : '/en/'; ?>"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></a>
                        </div>
                    </div>*/?>
                    <div class="mobile-contacts__item">
                        <a href="<?= SITE_ID == 'en' ? '//'.DOMAIN : '//'.EN_DOMAIN; ?>" class="language iconed iconed_center">
                            <?php if (SITE_ID != 'en'): ?>
                                <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                            <?php else: ?>
                                <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/russian.png" alt="">
                            <?php endif; ?>
                            <span class="language__content title"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></span>
                        </a>
                    </div>
                    <div class="mobile-contacts__item">
                        <a href="/servis/lizing/" class="iconed iconed_center">
                            <img class="iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/calc-icon.svg" alt="">
                            <span class="title"><?=GetMessage("LEASING_CALC")?></span>
                        </a>
                    </div>
                </div>

                <?php/*
                <a href="<?= SITE_DIR; ?>configurator/" class="conf-btn">
                    <span class="conf-btn__title">Конфигуратор</span>
                </a>*/?>
            </div>
        </header>

        <main class="main <?php $APPLICATION->ShowProperty('main_class'); ?>">
