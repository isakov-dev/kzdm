<?
use Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Service\GeoIp;
use Rover\GeoIp\Location;

class OnBeforeIBlockElementAdd
{

    public static $arIblocksId = ['26', '25', '27', '56', '51', '49', '50'];

    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if ($_COOKIE['BITRIX_SM_CITY_ID']) {
            $res = CIBlockElement::GetByID($_COOKIE['BITRIX_SM_CITY_ID']);
            if($ar_res = $res->GetNext())
                $city = $ar_res['NAME'];
        }
        else {
            if (\Bitrix\Main\Loader::includeModule('rover.geoip')) {
                try {
                    $location = Location::getInstance(GeoIp\Manager::getRealIp());
                    $city = $location->getCityName();

                } catch (\Exception $e) {
                    //echo $e->getMessage();
                }
            }
        }
        if (in_array($arFields['IBLOCK_ID'], self::$arIblocksId)) {

            $phone = isset($arFields['PROPERTY_VALUES']['NAME']) ? $arFields['PROPERTY_VALUES']['NAME'] : '';
            $email = isset($arFields['PROPERTY_VALUES']['EMAIL']) ? $arFields['PROPERTY_VALUES']['EMAIL'] : '';
            $comment = isset($arFields['PROPERTY_VALUES']['MESSAGE']['VALUE']['TEXT']) ? 'Комментарий: ' . $arFields['PROPERTY_VALUES']['MESSAGE']['VALUE']['TEXT'] . '<br>' : '';
            $comment .= isset($arFields['PROPERTY_VALUES']['ITEM']) ? 'Вид техники: ' . $arFields['PROPERTY_VALUES']['ITEM'] . '<br>' : '';
            $comment .= isset($arFields['PROPERTY_VALUES']['SPARE']) ? 'Деталь: ' . $arFields['PROPERTY_VALUES']['SPARE'] . '<br>' : '';
            $params = [
                "TITLE" => isset($arFields['NAME']) ? $arFields['NAME'] . ' c kzdm.ru' : 'Новая заявка с сайта',
                "PHONE" => ['VALUE' => $phone, 'VALUE_TYPE' => 'WORK'],
                "EMAIL" => ['VALUE' => $email, 'VALUE_TYPE' => 'WORK'],
                "NAME" => isset($arFields['PROPERTY_VALUES']['NAME']) ? $arFields['PROPERTY_VALUES']['NAME'] : '',
                "COMMENTS" => $comment,
                'SOURCE_ID' => 'WEB',
                'UF_CRM_1597389647222' => $city
            ];

            $queryUrl = 'https://kzdm.bitrix24.ru/rest/2793/aqv0i14ibou3bsoi/crm.lead.add.json';
            $queryData = http_build_query(array(
                'fields' => $params
            ));
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $queryUrl,
                CURLOPT_POSTFIELDS => $queryData,
            ));
            $result = curl_exec($curl);
            curl_close($curl);
            $resultQuery = json_decode($result, 1);
            AddMessage2Log("<br/><br/><pre>".print_r($comment,true)."</pre><br/><br/>", "test");
            return $arFields;

        }


    }

}

AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', ['OnBeforeIBlockElementAdd', 'OnBeforeIBlockElementAddHandler']);



