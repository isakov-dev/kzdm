<?php

use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Service\GeoIp;
use Rover\GeoIp\Location;

$this->setFrameMode(true);

$app = \Bitrix\Main\Application::getInstance();
$context = $app->getContext();
?>

<?php if (!empty($arResult)): ?>

  <div class="window-bottom__item header-active-city">
      <div class="city">
          <a href="#" data-src="#city-popup" class="inline-popup-trigger city-btn iconed iconed_center">
              <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                   class="location-ico iconed__ico iconed__ico_r-small">
                  <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#location-ico"></use>
              </svg>
              <span class="city-btn__content">
                  <span class="city-btn__title "><?= SITE_ID == 'en' ? $arResult['TITLE_EN'] : $arResult['TITLE']; ?></span>
                  <i class="city-arrow city-arrow_offset"></i>
              </span>
          </a>
      </div>
      <?php if (empty($context->getRequest()->getCookie('CITY_ID'))): ?>
          <div class="header-active-city__selector">
              <div class="header-active-city__selector-title">
                  <?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_TITLE'); ?>
              </div>
              <div class="header-active-city__selector-buttons">
                  <a id="confirm-city" class="header-active-city__selector-btn success"
                     href="javascript:void(0)<?//= $arResult['DOMAIN']; ?>" data-id="<?= $arResult['ID']; ?>">
                      <?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_BUTTON_SUCCESS'); ?>
                  </a>
                  <button class="header-active-city__selector-btn wrong inline-popup-trigger city-btn" type="button"
                          data-src="#city-popup">
                      <?= Bitrix\Main\Localization\Loc::getMessage('CITY_SELECTOR_BUTTON_WRONG'); ?>
                  </button>
              </div>
          </div>
      <?php endif; ?>
  </div>

<?php endif; ?>
