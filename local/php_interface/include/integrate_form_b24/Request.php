<?
class Request
{
   // const B24_WEBHOOK = 'https://kzdm.bitrix24.ru/rest/2793/aqv0i14ibou3bsoi/';

    public static function call($params)
    {
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
       return  $result = json_decode($result, 1);
    }

}

