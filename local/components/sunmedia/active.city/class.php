<?php

use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Service\GeoIp;

Loc::loadMessages(__FILE__);

/**
 * Class ActiveCityComponent
 */
class ActiveCityComponent extends \CBitrixComponent
{
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
     * ActiveCityComponent constructor.
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
        $res = \CIBlockElement::GetList([], $this->filter(), false, false, self::$arSelect);

        if ($el = $res->GetNext()) {
            $this->arResult = [
                'TITLE' => $el['NAME'],
                'TITLE_EN' => $el['PROPERTY_TITLE_EN_VALUE'],
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
            $this->actionRun();
        } catch (\Bitrix\Main\LoaderException $e) {
            echo $e->getMessage();
        }

        $this->includeComponentTemplate();
    }

    /**
     * @return array
     */
    private function filter(): array
    {
        if (empty($this->context->getRequest()->getCookie('CITY_ID'))) {
            return [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                '!PROPERTY_DEFAULT' => false,
                'ACTIVE' => 'Y'
            ];
        }

        return [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ID' => $this->context->getRequest()->getCookie('CITY_ID'),
            'ACTIVE' => 'Y'
        ];
    }
}