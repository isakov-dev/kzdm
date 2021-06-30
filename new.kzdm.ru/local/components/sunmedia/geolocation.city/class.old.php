<?php

use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Service\GeoIp;

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

        if ($_REQUEST['dev'] == 'y') {
            echo 'dev';
        }

        //TODO: зарефакторить когда-нибудь
        $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (empty($this->context->getRequest()->getCookie('CITY_ID'))) {
            $el = \CIBlockElement::GetList([], $this->filter(), false, false, self::$arSelect);
            if ($res = $el->GetNext()) {
                $this->arResult = [
                    'TITLE' => $res['NAME'],
                    'TITLE_EN' => $res['PROPERTY_TITLE_EN_VALUE'],
                    'DOMAIN' => ($res['PROPERTY_DEFAULT_VALUE'] == 'Y') ? sprintf('//%s%s', DOMAIN, $currentUri) : sprintf('//%s.%s%s', $res['CODE'], DOMAIN, $currentUri),
                    'ID' => $res['ID'],
                ];
            } else {
                $el = \CIBlockElement::GetList([], ['IBLOCK_ID' => $this->arParams['IBLOCK_ID'], '!PROPERTY_DEFAULT' => false, 'ACTIVE' => 'Y'], false, false, self::$arSelect)->GetNext();
                $this->arResult = [
                    'TITLE' => $el['NAME'],
                    'TITLE_EN' => $el['PROPERTY_TITLE_EN_VALUE'],
                    'DOMAIN' => sprintf('//%s%s', DOMAIN, $currentUri),
                    'ID' => $el['ID'],
                ];
            }
        } else {
            $el = \CIBlockElement::GetList([], ['IBLOCK_ID' => $this->arParams['IBLOCK_ID'], 'ID' => $this->context->getRequest()->getCookie('CITY_ID'), 'ACTIVE' => 'Y'], false, false, self::$arSelect)->GetNext();
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
     * Получаем данные о регионе из ip
     *
     * @return GeoIp\Result|null
     */
    private function getRealIpAddressData(): ?GeoIp\Result
    {
        return GeoIp\Manager::getDataResult($this->getIpAddress(), LANGUAGE_ID);
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
        if (empty($this->getRealIpAddressData()->getGeoData()->cityName)) {
            return [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                '!PROPERTY_DEFAULT' => false,
                'ACTIVE' => 'Y'
            ];
        }

        return [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'NAME' => $this->getRealIpAddressData()->getGeoData()->cityName,
            'ACTIVE' => 'Y'
        ];
    }
}