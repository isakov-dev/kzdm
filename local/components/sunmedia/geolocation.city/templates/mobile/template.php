<?php
$this->setFrameMode(true);

$app = \Bitrix\Main\Application::getInstance();
$context = $app->getContext();
?>
<?php if (!empty($arResult)): ?>
    <div class="window-bottom__item header-active-city header-active-city-mobile">
        <div class="city">
            <a href="#" data-src="#city-popup" class="inline-popup-trigger city-btn iconed iconed_center">
                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="location-ico iconed__ico iconed__ico_r-small">
                    <path d="M9 21.7279L2.636 15.3639C1.37734 14.1052 0.520187 12.5016 0.172928 10.7558C-0.17433 9.00995 0.00390685 7.20035 0.685099 5.55582C1.36629 3.91129 2.51984 2.50569 3.99988 1.51677C5.47992 0.527838 7.21998 0 9 0C10.78 0 12.5201 0.527838 14.0001 1.51677C15.4802 2.50569 16.6337 3.91129 17.3149 5.55582C17.9961 7.20035 18.1743 9.00995 17.8271 10.7558C17.4798 12.5016 16.6227 14.1052 15.364 15.3639L9 21.7279ZM13.95 13.9499C14.9289 12.9709 15.5955 11.7236 15.8656 10.3658C16.1356 9.00795 15.9969 7.60052 15.4671 6.32148C14.9373 5.04244 14.04 3.94923 12.8889 3.18009C11.7378 2.41095 10.3844 2.00043 9 2.00043C7.61557 2.00043 6.26222 2.41095 5.11109 3.18009C3.95996 3.94923 3.06275 5.04244 2.53292 6.32148C2.00308 7.60052 1.86442 9.00795 2.13445 10.3658C2.40449 11.7236 3.07111 12.9709 4.05 13.9499L9 18.8999L13.95 13.9499ZM9 10.9999C8.46957 10.9999 7.96086 10.7892 7.58579 10.4141C7.21072 10.0391 7 9.53035 7 8.99992C7 8.46949 7.21072 7.96078 7.58579 7.58571C7.96086 7.21064 8.46957 6.99992 9 6.99992C9.53044 6.99992 10.0391 7.21064 10.4142 7.58571C10.7893 7.96078 11 8.46949 11 8.99992C11 9.53035 10.7893 10.0391 10.4142 10.4141C10.0391 10.7892 9.53044 10.9999 9 10.9999Z"
                          fill="#FF6E00"/>
                </svg>
                <span class="city-btn__content">
                    <span class="city-btn__title "><?= SITE_ID == 'en' ? $arResult['TITLE_EN'] : $arResult['TITLE']; ?></span>
                    <i class="city-arrow city-arrow_offset"></i>
                </span>
            </a>
        </div>
        <?php if (empty($context->getRequest()->getCookie('CITY_ID'))): ?>
            <div class="header-active-city__selector">
                <div class="header-active-city__selector-title"><?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_TITLE'); ?></div>
                <div class="header-active-city__selector-buttons">
                    <a id="confirm-city-mobile" class="header-active-city__selector-btn success" href="<?= $arResult['DOMAIN']; ?>" data-id="<?= $arResult['ID']; ?>"><?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_BUTTON_SUCCESS'); ?></a>
                    <button class="header-active-city__selector-btn wrong inline-popup-trigger city-btn" type="button" data-src="#city-popup"><?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_BUTTON_WRONG'); ?></button>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
