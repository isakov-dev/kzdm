<?php

$select = [
    'ID',
    'IBLOCK_ID',
    'NAME',
    'SECTION',
    'PROPERTY_VALUE',
    'IBLOCK_SECTION_ID'
];

foreach ($arResult as $key => $value) {
    $res = \CIBlockElement::GetList([], ['IBLOCK_ID' => 8, 'SECTION_ID' => $value['PROPERTIES']['PROPERTIES']['VALUE'], 'INCLUDE_SUBSECTIONS' => 'Y'], false, false, $select);
    while ($ob = $res->GetNext()) {
        $arResult[$key]['PR'][$ob['IBLOCK_SECTION_ID']]['SECT_TITLE'] = \CIBlockSection::GetByID($ob['IBLOCK_SECTION_ID'])->GetNext()['NAME'];
        $arResult[$key]['PR'][$ob['IBLOCK_SECTION_ID']]['VALUES'][] = [
            'NAME' => $ob['NAME'],
            'VALUE' => $ob['PROPERTY_VALUE_VALUE'],
        ];
    }
}

$temp = [];
foreach ($arResult as $key => $item) {
    $temp[] = $item['PR'];
}

$temp1 = array_merge_recursive([], ...$temp);
//print_r($temp);
$arResult['COMPARE_TYPES'] = $temp1;