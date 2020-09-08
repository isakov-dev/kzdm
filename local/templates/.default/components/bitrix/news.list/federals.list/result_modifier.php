<?php

foreach ($arResult['ITEMS'] as $key => $value) {
    if (!empty($value['DISPLAY_PROPERTIES']['REGIONS'])) {
        $rRes = \CIBlockElement::GetList(
            [],
            [
                'ACTIVE' => 'Y',
                'ID' => $value['DISPLAY_PROPERTIES']['REGIONS']['VALUE']
            ],
            false,
            false,
            [
                'ID',
                'IBLOCK_ID',
                'NAME',
                'PROPERTY_TITLE_EN'
            ]
        );
        while ($ob = $rRes->GetNext()) {
            if (SITE_ID === 's1') {
                $name = $ob['NAME'];
            } else {
                $name = !empty($ob['PROPERTY_TITLE_EN_VALUE']) ? $ob['PROPERTY_TITLE_EN_VALUE'] : $ob['NAME'];
            }

            $arResult['ITEMS'][$key]['REGIONS'][] = $name;
        }
    }

    if (SITE_ID === 's1') {
        $arResult['ITEMS'][$key]['ABBR'] = !empty($value['DISPLAY_PROPERTIES']['ABBR']) ? $value['DISPLAY_PROPERTIES']['ABBR']['VALUE'] : $value['NAME'];
    } else {
        $arResult['ITEMS'][$key]['ABBR'] = !empty($value['DISPLAY_PROPERTIES']['ABBR_EN']) ? $value['DISPLAY_PROPERTIES']['ABBR_EN']['VALUE'] : $value['NAME'];
    }
}
