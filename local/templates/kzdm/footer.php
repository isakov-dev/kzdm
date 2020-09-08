            <?php
            Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
            ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "footer.advantages",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "N",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => SITE_ID == 'en' ? '35' : '7' ,
                    "IBLOCK_TYPE" => SITE_ID == 'en' ? "content_en" : 'content',
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("URL", "ICON"),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
        </main>
        <footer class="footer">
            <div class="wrapper wrapper_default">
                <div class="footer__row footer-up footer-up_offset">
                    <a href="<?= SITE_DIR; ?>" class="logo logo__footer">
                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-en.svg' : 'logo-main.svg'; ?>" alt="">
                    </a>
                    <a href="tel:88003509580" class="phone footer__phone">8 800 350 95 80</a>
                    <a href="mailto:omis@kzdm.ru" class="footer__mail title title_blue">omis@kzdm.ru</a>
                    <div class="soc footer__soc">
                        <a href="https://www.youtube.com/channel/UCm2VBq7IEbBI-vE3QvoIdqA" class="soc__ico soc__ico_you" target="_blank">
                            <svg class="youtube-ico iconed__ico">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#youtube-ico"></use>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/kzdm_45/" class="soc__ico soc__ico_inst" target="_blank">
                            <svg class="instagramm-ico iconed__ico">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#instagramm-ico"></use>
                            </svg>
                        </a>
                        <a href="https://vk.com/kurgandormash" class="soc__ico soc__ico_vk" target="_blank">
                            <svg class="vk-ico iconed__ico">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vk-ico"></use>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/kurgandormash/" class="soc__ico soc__ico_fb" target="_blank">
                            <svg class="fb-ico iconed__ico">
                                <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fb-ico"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer.top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "footer_top",
                        "USE_EXT" => "N"
                    )
                );?>
                <div class="footer__row footer__links">
                    <div class="row">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer.bottom",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "footer_bottom",
                                "USE_EXT" => "Y"
                            )
                        );?>

                        <div class="col col--xl-3 col--xl-offset-1">
                            <div class="contacts footer__contacts">
                                <?php $APPLICATION->IncludeComponent('sunmedia:footer.contacts', '', [
                                    'IBLOCK_ID' => 16
                                ]); ?>
                                <div class="contacts__nav contacts__nav_offset">
                                    <?php $APPLICATION->IncludeComponent('sunmedia:active.city', 'footer', [
                                        'IBLOCK_ID' => 16
                                    ]); ?>
                                </div>
                                <?php/*
                                <a class="language iconed iconed_center" href="<?= SITE_ID == 'en' ? '/' : '/en/'; ?>">
                                    <?php if (SITE_ID != 'en'): ?>
                                        <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                                    <?php else: ?>
                                        <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/russian.png" alt="">
                                    <?php endif; ?>
                                    <span class="language__content title title_medium"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></span>
                                </a>*/?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="copy">
                    <span class="copy__title">
                        © <?= Bitrix\Main\Localization\Loc::getMessage('COPYRIGHT'); ?>, <?= date('Y'); ?>
                    </span>
                    <span class="south-copy">
                        <span class="south-copy__title">
                            <?= Bitrix\Main\Localization\Loc::getMessage('POWERED'); ?>&nbsp;<a href="//sun-media.ru" class="south-copy__link title title_bold " target="_blank">sunmedia.</a>
                        </span>
                        <span class="south-copy__title">
                            <?=GetMessage('WEBSITE_PROMOTION')?>&nbsp;&nbsp;
                            <a href="//digitalaround.ru" class="south-copy__link title title_bold " target="_blank">
                                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/da-logo.png" alt="Digital Around">
                            </a>
                        </span>
                    </span>
                </div>
            </div>
        </footer>

        <div class="overlayer"></div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "homepage.header.video.popup",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => 58,
                "IBLOCK_TYPE" => "sliders",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "1",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("FILE", "TITLE_EN"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>

        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'callback', [
            'IBLOCK_ID' => 26,
            'EVENT_NAME' => 'NEW_CALLBACK',
            'CACHE_TYPE' => 'N',
            'FORM_ID' => 'callback',
            'FIELDS' => [
                'PHONE' => [
                    'TYPE' => 'TEL',
                    'REQUIRED' => false,
                ],
                'MESSAGE' => [
                    'TYPE' => 'TEXTAREA',
                    'REQUIRED' => false,
                ]
            ]
        ], false); ?>

        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'leasing', [
            'IBLOCK_ID' => 49,
            'EVENT_NAME' => 'NEW_LEASING',
            'CACHE_TYPE' => 'N',
            'FORM_ID' => 'leasing',
            'FIELDS' => [
                'PHONE' => [
                    'TYPE' => 'TEL',
                    'REQUIRED' => false,
                ],
                'ITEM' => [
                    'TYPE' => 'HIDDEN',
                    'REQUIRED' => false,
                ],
                'MESSAGE' => [
                    'TYPE' => 'TEXTAREA',
                    'REQUIRED' => false,
                ]
            ]
        ], false); ?>

        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'parts', [
            'IBLOCK_ID' => 51,
            'EVENT_NAME' => 'NEW_PARTS_REQUEST',
            'CACHE_TYPE' => 'N',
            'FORM_ID' => 'parts',
            'FIELDS' => [
                'PHONE' => [
                    'TYPE' => 'TEL',
                    'REQUIRED' => false,
                ],
                'ITEM' => [
                    'TYPE' => 'HIDDEN',
                    'REQUIRED' => false,
                ],
                'MESSAGE' => [
                    'TYPE' => 'TEXTAREA',
                    'REQUIRED' => false,
                ]
            ]
        ], false); ?>

        <div style="display: none;" id="window" class="window">
            <div class="window__content">
                <div class="window__left">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "modal",
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
                    <div class="window-bottom">
                        <div class="window-bottom__left">
                            <div class="window-bottom__item">
                                <a href="mailto:omis@kzdm.ru" class="h4 title title_blue title_medium window-mail">omis@kzdm.ru</a>
                            </div>
                            <?php $APPLICATION->IncludeComponent('sunmedia:active.city', '', [
                                'IBLOCK_ID' => 16
                            ]); ?>
                            <div class="window-bottom__item">
                                <?php/*
                                <a href="<?= SITE_ID == 'en' ? '/' : '/en/'; ?>" class="language iconed iconed_center">
                                    <?php if (SITE_ID != 'en'): ?>
                                        <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                                    <?php else: ?>
                                        <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/russian.png" alt="">
                                    <?php endif; ?>
                                    <span class="language__content title title_medium"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></span>
                                </a>*/?>
                            </div>
                        </div>
                        <div class="soc window__soc">
                            <a href="https://www.youtube.com/channel/UCm2VBq7IEbBI-vE3QvoIdqA" class="soc__ico soc__ico_you" target="_blank">
                                <svg class="youtube-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#youtube-ico"></use>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/kzdm_45/" class="soc__ico soc__ico_inst">
                                <svg class="instagramm-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#instagramm-ico"></use>
                                </svg>
                            </a>
                            <a href="https://vk.com/kurgandormash" class="soc__ico soc__ico_vk" target="_blank">
                                <svg class="vk-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vk-ico"></use>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/kurgandormash/" class="soc__ico soc__ico_fb" target="_blank">
                                <svg class="fb-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fb-ico"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="window__right">
                    <?php/*
                    <a href="<?= SITE_DIR; ?>configurator/" class="window-control window-control_comb window-control_shadow">
                        <div class="window-control__content">
                            <span class="h4 title title_upper title_bold"><?= Bitrix\Main\Localization\Loc::getMessage('CONFIGURATOR'); ?></span>
                        </div>
                        <span class="window-control__desc"><?= Bitrix\Main\Localization\Loc::getMessage('CONFIGURATOR_SUB'); ?></span>
                        <img class="window-control__pic" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/configuration.jpg" alt="">
                    </a>*/?>
                    <a class="window-control window-control_phone phone-popup-trigger" data-src="#callback" href="javascript:;">
                        <div class="window-control__content">
                            <span class="h4 title title_upper title_bold"><?= SITE_ID == 'en' ? 'Callback' : 'Заказать звонок'; ?></span>
                        </div>
                        <span class="window-control__desc"><?= Bitrix\Main\Localization\Loc::getMessage('CONSULT_REQUEST_SUB'); ?></span>
                    </a>
                </div>
            </div>
        </div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "modal.cities",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => '16',
                "IBLOCK_TYPE" => "regions",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "1000",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("TITLE_EN", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "NAME",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>

        <?php $APPLICATION->IncludeComponent('sunmedia:search.form', '', []); ?>

        <script>
            new WOW().init();
        </script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(<?=YANDEX_METRIKA_ID?>, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/<?=YANDEX_METRIKA_ID?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b4420285/crm/tag/call.tracker.js');
        </script>

    </body>
</html>