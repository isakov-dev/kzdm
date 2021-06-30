<?php

if (!empty($arParams['FIELDS']['ITEM']['ITEMS_IBLOCK_ID']) && $arParams['FIELDS']['ITEM']['TYPE'] == 'SELECT') {
    $res = \CIBlockElement::GetList([], [
        'IBLOCK_ID' => $arParams['FIELDS']['ITEM']['ITEMS_IBLOCK_ID'],
        'ACTIVE' => 'Y'
    ], false, false, ['ID', 'IBLOCK_ID', 'NAME']);
    while ($ob = $res->GetNext()) {
        $arResult['ITEMS'][] = $ob['NAME'];
    }
}
