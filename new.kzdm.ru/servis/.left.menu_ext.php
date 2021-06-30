<?php

global $APPLICATION;

try {
    \Bitrix\Main\Loader::includeModule('iblock');

    $aMenuLinksExt = [];

    $res = \CIBlockElement::GetList(
        [
            'SORT' => 'ASC'
        ],
        [
            'IBLOCK_ID' => 14,
            'ACTIVE' => 'Y'
        ],
        false,
        false,
        [
            'ID',
            'IBLOCK_ID',
            'NAME',
            'DETAIL_PAGE_URL'
        ]
    );

    while ($ob = $res->GetNext()) {
        if(DOMAIN_ZONE == 'kz') {
            if($ob['NAME'] != 'Лизинг') {
                $aMenuLinksExt[] = [
                    $ob['NAME'],
                    $ob['DETAIL_PAGE_URL'],
                    [],
                    [],
                    ''
                ];
            }
        } else {
            $aMenuLinksExt[] = [
                $ob['NAME'],
                $ob['DETAIL_PAGE_URL'],
                [],
                [],
                ''
            ];
        }

    }

    $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
} catch (\Bitrix\Main\LoaderException $e) {
    echo $e->getMessage();
}
