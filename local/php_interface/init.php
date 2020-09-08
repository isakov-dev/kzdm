<?php

include_once(__DIR__ . '/include/constants.php');
require_once __DIR__ . '/../vendor/autoload.php';
include_once(__DIR__ . '/include/integrate_form_b24/OnBeforeIBlockElementAdd.php');

/**
 * @param $image
 * @param $width
 * @param $height
 * @param int $type
 * @return mixed
 */
function resizeImage($image, $width, $height, $type = BX_RESIZE_IMAGE_PROPORTIONAL)
{
    $img = \CFile::ResizeImageGet($image, ['width' => $width, 'height' => $height], $type);

    return $img['src'];
}

/**
 * @param $bytes
 * @param int $decimals
 * @return string
 */
function humanFileSize($bytes, $decimals = 2): string
{
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$sz[$factor];
}

/**
 * @param int $number
 * @param array $after
 * @return string
 */
function pluralForm(int $number, array $after): string
{
    $cases = [2, 0, 1, 1, 1, 2];

    return $number . ' ' . $after[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
}

\CModule::IncludeModule('iblock');

// делаем редирект на установленный поддомен
// город вытягиваем из базы по id из печенек
if (isset($_COOKIE['BITRIX_SM_CITY_ID']) && !empty($_COOKIE['BITRIX_SM_CITY_ID'])) {
    $res = \CIBlockElement::GetList([], ['ACTIVE' => 'Y', 'ID' => $_COOKIE['BITRIX_SM_CITY_ID'], 'IBLOCK_ID' => 16],
        false, false, ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_DEFAULT']);
    if ($ob = $res->GetNext()) {
        if ($ob['PROPERTY_DEFAULT_VALUE'] != 'Y') { // если это не основной домен, то и редиректить нам не надо
            $domain = sprintf('//%s.%s%s', $ob['CODE'], DOMAIN, SITE_DIR);
            $compareDomain = sprintf('%s.%s', $ob['CODE'], DOMAIN);
            if ($_SERVER['SERVER_NAME'] != $compareDomain) {
                header("Location: {$domain}");
                exit();
            }
        }
    }
}

if (!function_exists('custom_mail') && COption::GetOptionString("webprostor.smtp", "USE_MODULE") == "Y") {
    /**
     * @param $to
     * @param $subject
     * @param $message
     * @param string $additional_headers
     * @param string $additional_parameters
     * @return bool
     */
    function custom_mail($to, $subject, $message, $additional_headers = '', $additional_parameters = '')
    {
        if (CModule::IncludeModule("webprostor.smtp")) {
            $smtp = new CWebprostorSmtp("s1");
            $result = $smtp->SendMail($to, $subject, $message, $additional_headers, $additional_parameters);

            if ($result) {
                return true;
            }

            return false;
        }
    }
}

/**
 * Get current city name
 * If current city not set, find default city
 *
 * @return string|null
 */
function getCurrentCity(): ?string
{
    if (isset($_COOKIE['BITRIX_SM_CITY_ID']) && !empty($_COOKIE['BITRIX_SM_CITY_ID'])) {
        $res = \CIBlockElement::GetList([], ['ACTIVE' => 'Y', 'ID' => $_COOKIE['BITRIX_SM_CITY_ID'], 'IBLOCK_ID' => 16],
            false, false, ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_DEFAULT']);
        if ($ob = $res->GetNext()) {
            return $ob['NAME'];
        }
    } else {
        $res = \CIBlockElement::GetList([], ['ACTIVE' => 'Y', '!PROPERTY_DEFAULT' => false, 'IBLOCK_ID' => 16], false,
            false, ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_DEFAULT']);
        if ($ob = $res->GetNext()) {
            return $ob['NAME'];
        }
    }

    return null;
}

if (\Bitrix\Main\Loader::includeModule('iblock')) {
    \Bitrix\Main\EventManager::getInstance()->addEventHandler(
        'iblock',
        'OnTemplateGetFunctionClass',
        'seoTemplatesHandler'
    );

    /**
     * @param \Bitrix\Main\Event $event
     * @return \Bitrix\Main\EventResult
     */
    function seoTemplatesHandler(Bitrix\Main\Event $event)
    {
        $arParam = $event->getParameters();
        $functionClass = $arParam[0];

        if (is_string($functionClass) && class_exists($functionClass)) {
            switch ($functionClass) {
                case 'iffilled': // вывод свойства только если оно заполнено
                    $result = new Bitrix\Main\EventResult(1, $functionClass);
                    break;
                case 'current_city': // вывод текущего города
                    $result = new Bitrix\Main\EventResult(1, $functionClass);
                    break;
                case 'take_first': // вывод первого из заполненных значений
                    $result = new Bitrix\Main\EventResult(1, $functionClass);
            }
        }

        return $result;
    }

    include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/iblock/lib/template/functions/fabric.php');

    /**
     * Class current_city
     */
    class current_city extends \Bitrix\Iblock\Template\Functions\FunctionBase
    {
        /**
         * @param array $parameters
         * @return mixed|string
         */
        public function calculate(array $parameters): string
        {
            return $this->getCurrentCity();
        }

        /**
         * Get current city name
         * If current city not set, find default city
         *
         * @return string|null
         */
        private function getCurrentCity(): ?string
        {
            if (isset($_COOKIE['BITRIX_SM_CITY_ID']) && !empty($_COOKIE['BITRIX_SM_CITY_ID'])) {
                $res = \CIBlockElement::GetList([], ['ACTIVE' => 'Y',
                    'ID' => $_COOKIE['BITRIX_SM_CITY_ID'], 'IBLOCK_ID' => 16], false, false,
                    ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_DEFAULT']);
                if ($ob = $res->GetNext()) {
                    return $ob['NAME'];
                }
            } else {
                $res = \CIBlockElement::GetList([], ['ACTIVE' => 'Y', '!PROPERTY_DEFAULT' => false, 'IBLOCK_ID' => 16],
                    false, false, ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PROPERTY_DEFAULT']);
                if ($ob = $res->GetNext()) {
                    return $ob['NAME'];
                }
            }

            return null;
        }
    }

    /**
     * Class iffilled
     */
    class iffilled extends \Bitrix\Iblock\Template\Functions\FunctionBase
    {
        /**
         * @param \Bitrix\Iblock\Template\Entity\Base $entity
         * @param array $parameters
         * @return array
         */
        public function onPrepareParameters(\Bitrix\Iblock\Template\Entity\Base $entity, array $parameters): array
        {
            $arguments = [];
            /** @var \Bitrix\Iblock\Template\NodeBase $parameter */
            foreach ($parameters as $parameter) {
                $arguments[] = $parameter->process($entity);
            }

            return $arguments;
        }

        /**
         * @param array $parameters
         * @return string
         */
        public function calculate(array $parameters): string
        {
            if (isset($parameters[0]) && $parameters[0] && isset($parameters[1])) {
                return sprintf($parameters[1], $parameters[0]);
            }

            return '';
        }
    }

    /**
     * Class take_first
     */
    class take_first extends \Bitrix\Iblock\Template\Functions\FunctionBase
    {
        /**
         * @param array $parameters
         * @return mixed|string
         */
        public function calculate(array $parameters)
        {
            $arParams = $this->parametersToArray($parameters);

            return $arParams[0];
        }
    }
}
if (!function_exists('getIblockIdByCode')) {
    /**
     * По символьному коду инфоблока получаем его ID, кешируем результат
     *
     * @param [type] $code
     * @return int
     */
    function getIblockIdByCode($code)
    {
        $cacheTime = 360000;
        $obCache = new CPHPCache();
        $cachePath = '/custom_cache/';
        $cacheId = 'iblockCode'.$code;
        if ($obCache->InitCache($cacheTime, $cacheId, $cachePath))
        {
            $id = $obCache->GetVars();
        }
        else
        {
            CModule::IncludeModule("iblock");
            $res = CIBlock::GetList(
                Array(),
                Array(
                    "CODE"=>$code
                ), true
            );
            if($ar_res = $res->Fetch()) {
                $id= $ar_res['ID'];
            }
            else{
                $id=false;
            }
            global $CACHE_MANAGER;
            $CACHE_MANAGER->StartTagCache($cachePath);
            $CACHE_MANAGER->RegisterTag($cacheId);
            $CACHE_MANAGER->EndTagCache();
            if ($obCache->StartDataCache())
                $obCache->EndDataCache($id);
        }
        return $id;
    }
}
