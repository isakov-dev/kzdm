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
                    "IBLOCK_ID" => SITE_ID == 'en' ? '35' : (DOMAIN_ZONE == 'kz' ? '59' : '7'),
                    "IBLOCK_TYPE" => SITE_ID == 'en' ? "content_en" : (DOMAIN_ZONE == 'kz' ? 'content_kz' : 'content'),
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
                        <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/<?= SITE_ID == 'en' ? 'logo-main-en.svg' : 'logo-main-80.svg'; ?>" alt="">
                    </a>
                    <a href="tel:<?=str_replace(' ', '', PHONE)?>" class="phone footer__phone"><?=PHONE?></a>
                    <a href="mailto:omis@kzdm.ru" class="footer__mail title title_blue">omis@kzdm.ru</a>
                    <div class="soc footer__soc">
                        <?if (YOUTUBE) {?>
                            <a href="<?=YOUTUBE?>" class="soc__ico soc__ico_you" target="_blank">
                                <svg class="youtube-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#youtube-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (INSTAGRAM) {?>
                            <a href="<?=INSTAGRAM?>" class="soc__ico soc__ico_inst" target="_blank">
                                <svg class="instagramm-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#instagramm-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (VK) {?>
                            <a href="<?=VK?>" class="soc__ico soc__ico_vk" target="_blank">
                                <svg class="vk-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vk-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (FACEBOOK) {?>
                            <a href="<?=FACEBOOK?>" class="soc__ico soc__ico_fb" target="_blank">
                                <svg class="fb-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fb-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (TELEGRAM) {?>
                            <a href="<?=TELEGRAM?>" target="_blank" class="soc__ico soc__ico_telegramm">
                                <svg class="telegramm-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#telegramm-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (WHATSAPP) {?>
                            <a href="<?=WHATSAPP?>" target="_blank" class="soc__ico soc__ico_watsup">
                                <svg class="watsup-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#watsup-ico"></use>
                                </svg>
                            </a>
                        <?}?>
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
                                <?if (DOMAIN_ZONE == 'ru') {?>
                                    <div class="contacts__nav contacts__nav_offset">
                                        <?php $APPLICATION->IncludeComponent('sunmedia:active.city', 'footer', [
                                            'IBLOCK_ID' => 16
                                        ]); ?>
                                    </div>
                                <?}?>
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
                    <span class="copy__ofer">
                        Не является публичной офертой. Информация носит ознакомительный характер и не является окончательной.
                        Производитель оставляет за собой право изменять конфигурацию и характеристики оборудования.
                    </span>
                    <span class="south-copy">
                        <span class="south-copy__title">
                            <?= Bitrix\Main\Localization\Loc::getMessage('POWERED'); ?>&nbsp;<a href="//sun-media.ru" class="south-copy__link title title_bold " target="_blank">sunmedia.</a>
                        </span>
                        <?$isIndex = $APPLICATION->GetCurPage(false) == "/";?>
                        <span class="south-copy__title">
                            <?=GetMessage('WEBSITE_PROMOTION')?>&nbsp;&nbsp;
                            <a href="//digitalaround.ru" class="south-copy__link title title_bold"
                               <?if (!$isIndex) {?>rel="nofollow"<?}?> target="_blank">
                                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/da-logo.png" alt="Digital Around">
                            </a>
                        </span>
                    </span>
                </div>
            </div>
        </footer>

        <div class="overlayer"></div>

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
            <div class="window-bottom">
                <div class="window-bottom__left">
                    <div class="window-bottom__item">
                        <a href="mailto:omis@kzdm.ru" class="h4 title title_blue title_medium window-mail">omis@kzdm.ru</a>
                    </div>
                    <?if (DOMAIN_ZONE == 'ru') {?>
                        <?php $APPLICATION->IncludeComponent('sunmedia:active.city', '', [
                            'IBLOCK_ID' => 16
                        ]); ?>
                    <?}?>
                    <div class="window-bottom__item">
                        <a href="<?= SITE_ID == 'en' ? '//'.DOMAIN : '//'.EN_DOMAIN; ?>" class="language iconed iconed_center">
                            <?php if (SITE_ID != 'en'): ?>
                                <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/en.png" alt="">
                            <?php else: ?>
                                <img class="language__ico iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/russian.png" alt="">
                            <?php endif; ?>
                            <span class="language__content title"><?= SITE_ID == 'en' ? 'Russian' : 'English'; ?></span>
                        </a>
                    </div>
                    <div class="window-bottom__item">
                        <a href="/servis/lizing/" class="iconed iconed_center">
                            <img class="iconed__ico_r-small iconed_ico" src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/calc-icon.svg" alt="">
                            <span class="title"><?=GetMessage("LEASING_CALC")?></span>
                        </a>
                    </div>
                </div>
                <div class="window__soc-wrapper">
                    <div class="soc window__soc">
                        <?if (YOUTUBE) {?>
                            <a href="<?=YOUTUBE?>" class="soc__ico soc__ico_you" target="_blank">
                                <svg class="youtube-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#youtube-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (INSTAGRAM) {?>
                            <a href="<?=INSTAGRAM?>" class="soc__ico soc__ico_inst" target="_blank">
                                <svg class="instagramm-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#instagramm-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (VK) {?>
                            <a href="<?=VK?>" class="soc__ico soc__ico_vk" target="_blank">
                                <svg class="vk-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#vk-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (FACEBOOK) {?>
                            <a href="<?=FACEBOOK?>" class="soc__ico soc__ico_fb" target="_blank">
                                <svg class="fb-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#fb-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (TELEGRAM) {?>
                            <a href="<?=TELEGRAM?>" target="_blank" class="soc__ico soc__ico_telegramm">
                                <svg class="telegramm-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#telegramm-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                        <?if (WHATSAPP) {?>
                            <a href="<?=WHATSAPP?>" target="_blank" class="soc__ico soc__ico_watsup">
                                <svg class="watsup-ico iconed__ico">
                                    <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#watsup-ico"></use>
                                </svg>
                            </a>
                        <?}?>
                    </div>
                    <div class="window__apps">
                        <?if (IOS_APP) {?>
                            <a href="<?=IOS_APP?>" class="window__app" target="_blank">
                                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/app-store-<?=LANGUAGE_ID?>.png" alt="">
                            </a>
                        <?}?>
                        <?if (ANDROID_APP) {?>
                            <a href="<?=ANDROID_APP?>" class="window__app" target="_blank">
                                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/google-play-<?=LANGUAGE_ID?>.png" alt="">
                            </a>
                        <?}?>
                    </div>
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
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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

        <?if (YANDEX_METRIKA_ID !== false) {?>
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
        <?}?>

        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b4420285/crm/tag/call.tracker.js');
        </script>

        <!-- calltouch -->
        <script type="text/javascript">
        (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","qh90goix");
        </script>
        <script>
        jQuery(document).on('click', 'form button', function() {
            var m = jQuery(this).closest('form');
            var fio = m.find('input[name*="NAME"]').val();
            var phone = m.find('input[name*="PHONE"]').val();
            var mail = m.find('input[name*="EMAIL"]').val();
            var comment = m.find('textarea[name*="MESSAGE"]').val();
            var ct_site_id = '39814';
            var sub = 'Заявка c ' + location.hostname;
            var ct_check = !!phone || !!mail;
            var ct_check_form = m.attr('id');
            if (ct_check_form == "callback-form"){ sub = 'Заказать звонок'; ct_check = !!phone && !!comment; }
            if (ct_check_form == "blue-form"){ sub = 'Заказать звонок'; ct_check = !!phone; }
            if (ct_check_form == 'feedback-form'){ sub = 'Обратная связь'; ct_check = !!fio && !!mail && !!comment; }
            if (ct_check_form == 'leasing-form'){ sub = 'Заявка на лизинг'; ct_check = !!phone && !!comment; }
            if (ct_check_form == 'test-drive-form'){ sub = 'Заявка на тест-драйв'; ct_check = !!phone && !!fio && !!mail && !!comment; }
            var ct_data = {
                fio: fio,
                phoneNumber: phone,
                subject: sub,
                comment: comment,
                email: mail,
                requestUrl: location.href,
                sessionId: window.call_value
            };
            console.log(ct_data,ct_check);
            if (ct_check){
                jQuery.ajax({
                    url: 'https://api-node15.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
                    dataType: 'json', type: 'POST', data: ct_data, async: false
                });
            }
        });
        </script>
        <script type="text/javascript">
        var _ctreq = function(data) {
            var sid = 39814, nid = 15;
            var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
            var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
            var url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
            request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
        };
        window.addEventListener('message', function(e) {
            var data = {}; try { data = JSON.parse(e.data); } catch (err){ } if(!data.action) return;
            if (data.action == 'event' && data.eventName == 'send'){
                var fio = !!data.value[0].LEAD_NAME ? data.value[0].LEAD_NAME : !!data.value[0].CONTACT_NAME ? data.value[0].CONTACT_NAME : '',
                phone = !!data.value[0].LEAD_PHONE ? data.value[0].LEAD_PHONE : !!data.value[0].CONTACT_PHONE ? data.value[0].CONTACT_PHONE : '',
                email = !!data.value[0].LEAD_EMAIL ? data.value[0].LEAD_EMAIL : !!data.value[0].CONTACT_EMAIL ? data.value[0].CONTACT_EMAIL : '',
                comment = !!data.value[0].DEAL_COMMENTS ? data.value[0].DEAL_COMMENTS : !!data.value[0].LEAD_COMMENTS ? data.value[0].LEAD_COMMENTS : '',
                sub = 'Заявка с формы Bitrix24 ' + location.hostname,
                ct_data = {fio: fio, phoneNumber: phone, email: email, comment: comment, subject: sub, requestUrl: location.href, sessionId: window.call_value};
                if (!!phone || !!email) _ctreq(ct_data);
            }
        });
        </script>
        <script>
        window.addEventListener('onBitrixLiveChat', function(event){
            var widget = event.detail.widget;
            widget.subscribe({
                type: BX.LiveChatWidget.SubscriptionType.every, callback: function(ev){
                    if (ev.type == BX.LiveChatWidget.SubscriptionType.userMessage){
                        if (!window.ct_snd_flag && !!window.ct){ ct('goal','b24chat'); window.ct_snd_flag = 1; }
                    }
                    if (ev.type == BX.LiveChatWidget.SubscriptionType.userForm){
                        var sid = 39814, nid = 15;
                        var fio = ''; var phone = ''; var email = '';
                        if (!!ev.data && !!ev.data.fields && !!ev.data.fields.name){ fio = ev.data.fields.name; }
                        if (!!ev.data && !!ev.data.fields && !!ev.data.fields.phone){ phone = ev.data.fields.phone; }
                        if (!!ev.data && !!ev.data.fields && !!ev.data.fields.email){ email = ev.data.fields.email; }
                        var ct_data = {}; ct_data.phoneNumber = phone; ct_data.fio = fio; ct_data.email = email; ct_data.requestUrl = location.href; ct_data.sessionId = window.call_value;
                        ct_data.subject = 'Чат Bitrix24 посетитель оставил контакты';
                        var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
                        var post_data = Object.keys(ct_data).reduce(function(a,k){if(!!ct_data[k]){a.push(k+'='+encodeURIComponent(ct_data[k]));}return a},[]).join('&');
                        var url = 'https://api-node'+nid+'.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
                        request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
                    }
                }
            });
        });
        </script>
        <!-- calltouch -->
    </body>
</html>