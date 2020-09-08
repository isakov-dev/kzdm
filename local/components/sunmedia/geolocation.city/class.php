<?php

use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Service\GeoIp;
use Rover\GeoIp\Location;

Loc::loadMessages(__FILE__);

/**
 * Class GeolocationCityComponent
 */
class GeolocationCityComponent extends \CBitrixComponent
{
    private $ipAddress;
    private $application;
    private $context;
    private static $arSelect = [
        'ID',
        'IBLOCK_ID',
        'PROPERTY_TITLE_EN',
        'PROPERTY_DEFAULT',
        'NAME',
        'CODE'
    ];

    /**
     * GeolocationCityComponent constructor.
     *
     * @param null $component
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($component = null)
    {
        parent::__construct($component);
        $this->application = \Bitrix\Main\Application::getInstance();
        $this->context = $this->application->getContext();
    }

    /**
     * @return array
     */
    public function actionRun(): array
    {

        $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (empty($this->context->getRequest()->getCookie('CITY_ID'))) { //если нет выбранного города

            if ($_SERVER['SERVER_NAME'] == DOMAIN) { //если основной домен - определяем город

                $el = \CIBlockElement::GetList([], $this->filter(), false, false, self::$arSelect);

                if ($res = $el->GetNext()) { //если удалось определить город

                    $this->arResult = [
                        'TITLE' => $res['NAME'],
                        'TITLE_EN' => $res['PROPERTY_TITLE_EN_VALUE'],
                        'DOMAIN' => ($res['PROPERTY_DEFAULT_VALUE'] == 'Y') ? sprintf('//%s%s', DOMAIN, $currentUri) :
                            sprintf('//%s.%s%s', $res['CODE'], DOMAIN, $currentUri),
                        'ID' => $res['ID'],
                    ];

                } else { //если не смогли определить город

                    $el = \CIBlockElement::GetList([], ['IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                        '!PROPERTY_DEFAULT' => false, 'ACTIVE' => 'Y'], false, false, self::$arSelect)->GetNext();
                    $this->arResult = [
                        'TITLE' => $el['NAME'],
                        'TITLE_EN' => $el['PROPERTY_TITLE_EN_VALUE'],
                        'DOMAIN' => sprintf('//%s%s', DOMAIN, $currentUri),
                        'ID' => $el['ID'],
                    ];

                }

            } else { //если поддомен - берем город из поддомена

                $res = \CIBlockElement::GetList([], ['IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                    'PROPERTY_DEFAULT' => false, 'ACTIVE' => 'Y'], false, false, self::$arSelect);
                while ($ob = $res->GetNext()) {
                    $compareDomain = sprintf('%s.%s', $ob['CODE'], DOMAIN);
                    if ($_SERVER['SERVER_NAME'] == $compareDomain) {
                        $this->arResult = [
                            'TITLE' => $ob['NAME'],
                            'TITLE_EN' => $ob['PROPERTY_TITLE_EN_VALUE'],
                            'DOMAIN' => sprintf('//%s%s', DOMAIN, $currentUri),
                            'ID' => $ob['ID'],
                        ];
                        break;
                    }
                }

            }


        } else { //если есть выбранный город

            $el = \CIBlockElement::GetList([], ['IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'ID' => $this->context->getRequest()->getCookie('CITY_ID'), 'ACTIVE' => 'Y'], false, false,
                self::$arSelect)->GetNext();
            $this->arResult = [
                'TITLE' => $el['NAME'],
                'TITLE_EN' => $el['PROPERTY_TITLE_EN_VALUE'],
                'DOMAIN' => sprintf('//%s%s', DOMAIN, $currentUri),
                'ID' => $el['ID'],
            ];

        }

        return $this->arResult;
    }

    /**
     * Стартуем компонент
     *
     * @return mixed|void|null
     */
    public function executeComponent()
    {
        try {
            \Bitrix\Main\Loader::includeModule('iblock');
            $this->setIpAddress(GeoIp\Manager::getRealIp());
            $this->actionRun();
        } catch (\Bitrix\Main\LoaderException $e) {
            echo $e->getMessage();
        }

        $this->includeComponentTemplate();
    }

    /**
     * @param string $ip
     * @return GeolocationCityComponent
     */
    private function setIpAddress(string $ip): GeolocationCityComponent
    {
        $this->ipAddress = $ip;

        return $this;
    }

    /**
     * @return mixed
     */
    private function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Устанавливаем фильтр для выборки
     *
     * @return array
     */
    private function filter(): array
    {

        if (\Bitrix\Main\Loader::includeModule('rover.geoip')) {
            try {
                $location = Location::getInstance(GeoIp\Manager::getRealIp());
                $cityName = $location->getCityName();
                if ($cityName) {
                    return [
                        'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                        'NAME' => $cityName,
                        'ACTIVE' => 'Y'
                    ];
                }
            } catch (\Exception $e) {
                //echo $e->getMessage();
            }
        }

        return [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            '!PROPERTY_DEFAULT' => false,
            'ACTIVE' => 'Y'
        ];

    }
}