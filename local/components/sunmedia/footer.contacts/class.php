<?php

/**
 * Class FooterContactsComponent
 */
class FooterContactsComponent extends \CBitrixComponent
{
    private $application;
    private $context;
    private static $arSelect = [
        'ID',
        'IBLOCK_ID',
        'PROPERTY_FOOTER_CONTACTS',
        'PROPERTY_FOOTER_CONTACTS_EN',
        'NAME'
    ];

    /**
     * FooterContactsComponent constructor.
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
        $el = \CIBlockElement::GetList([], $this->filter(), false, false, self::$arSelect);

        if ($val = $el->GetNext()) {
            $this->arResult = [
                'TEXT' => $val['~PROPERTY_FOOTER_CONTACTS_VALUE']['TEXT'],
                'TEXT_EN' => $val['~PROPERTY_FOOTER_CONTACTS_EN_VALUE']['TEXT'],
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
