<?php

if (!empty($arResult['ITEMS']) && !empty($arParams['PROPERTY_CODE'])) {
    $ids = array_map(function ($val) {
        return $val['ID'];
    }, $arResult['ITEMS']);

    $properties = array_map(function ($val) {
        return 'PROPERTY_' . $val;
    }, $arParams['PROPERTY_CODE']);

    $res = \CIBlockElement::GetList([], [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ID' => $ids,
    ], false, false, ['IBLOCK_ID', 'ID', 'NAME', $properties]);

    $buf = [];
    while ($ob = $res->GetNextElement()) {
        $props = $ob->GetProperties();
        $fields = $ob->GetFields();
        $buf[$fields['ID']] = $props;
    }

    foreach ($arResult['ITEMS'] as $key => $value) {
        if (array_key_exists($value['ID'], $buf)) {
            $arResult['ITEMS'][$key]['PROPS'] = $buf[$value['ID']];
        }
    }
}