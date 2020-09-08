<?php

$arFilter = [
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y',
    'GLOBAL_ACTIVE' => 'Y'
];

if (!empty($arResult['IBLOCK_SECTION_ID'])) {
    $arFilter['IBLOCK_SECTION_ID'] = $arResult['IBLOCK_SECTION_ID'];
}

$resNav = \CIBlockElement::getList(
    [
        $arParams['SORT_BY1'] => $arParams['SORT_ORDER1'],
        $arParams['SORT_BY2'] => $arParams['SORT_ORDER2'],
    ],
    $arFilter,
    false,
    [
        'nPageSize' => 1,
        'nElementID' => $arResult['ID']
    ],
    [
        'ID',
        'DETAIL_PAGE_URL',
        'NAME',
        'PREVIEW_PICTURE',
        'DETAIL_PICTURE'
    ]
);

$arNav = [];

while ($item = $resNav->GetNext()) {
    $arNav[] = $item;
}

if (count($arNav) > 2) {
    $arResult['NEXT'] = $arNav[2];
    $arResult['PREV'] = $arNav[0];
} else {
    if ($arNav[0]['ID'] == $arResult['ID']) {
        $arResult['NEXT'] = $arNav[1];
        $arResult['PREV'] = false;
    } else {
        $arResult['NEXT'] = false;
        $arResult['PREV'] = $arNav[0];
    }
}

if (!empty($arResult['PROPERTIES']['BLUEPRINTS']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['BLUEPRINTS']['VALUE'] as $value) {
        $arResult['BLUEPRINTS'][] = \CFile::GetFileArray($value);
    }
}

if (!empty($arResult['PROPERTIES']['PDF']['VALUE'])) {
    $arResult['PDF'] = \CFile::GetFileArray($arResult['PROPERTIES']['PDF']['VALUE']);
}

if (!empty($arResult['PROPERTIES']['PROPERTIES']['VALUE'])) {
    $resProps = \CIBlockSection::GetList(
        ['SORT' => 'ASC'],
        [
            'ACTIVE' => 'Y',
            'GLOBAL_ACTIVE' => 'Y',
            'SECTION_ID' => $arResult['PROPERTIES']['PROPERTIES']['VALUE']
        ],
        false,
        [
            'ID',
            'NAME'
        ],
        false
    );

    $i = 0;
    while ($ob = $resProps->GetNext()) {
        $arResult['PROPS'][$i] = $ob;
        $resPropElements = \CIBlockElement::GetList(
            [
                'SORT' => 'ASC'
            ],
            [
                'SECTION_ID' => $ob['ID']
            ],
            false,
            false,
            [
                'ID',
                'NAME',
                'PROPERTY_VALUE'
            ]
        );

        while ($el = $resPropElements->GetNext()) {
            $arResult['PROPS'][$i]['ELEMENTS'][] = $el;
        }

        $i++;
    }
}

if (!empty($arResult['PROPERTIES']['YOUTUBE']['VALUE'])) {
    $arResult['YOUTUBE'] = [
        'VIDEO' => $arResult['PROPERTIES']['YOUTUBE']['VALUE'],
        'COVERS' => getYoutubeVideoCover(getYoutubeVideoId($arResult['PROPERTIES']['YOUTUBE']['VALUE'])),
        'DATA' => getYoutube($arResult['PROPERTIES']['YOUTUBE']['VALUE'])
    ];
} elseif (!empty($arResult['PROPERTIES']['VIDEO']['VALUE'])) {
    $arResult['VIDEO'] = \CFile::GetFileArray($arResult['PROPERTIES']['VIDEO']['VALUE']);
}

if (!empty($arResult['PROPERTIES']['FEATURES']['VALUE'])) {
    $resFeature = \CIBlockElement::GetList(
        [
            'SORT' => 'ASC'
        ],
        [
            'SECTION_ID' => $arResult['PROPERTIES']['FEATURES']['VALUE']
        ],
        false,
        false,
        [
            'ID',
            'NAME',
            'PROPERTY_ADDITIONAL_IMG',
            'PREVIEW_TEXT',
            'PREVIEW_PICTURE'
        ]
    );

    while ($ob = $resFeature->GetNext()) {
        $arResult['FEATURES'][] = $ob;
    }
}

/**
 * @param string $videoId
 * @return array|string[]
 */
function getYoutubeVideoCover(string $videoId): array
{
    return [
        'LOW' => "//img.youtube.com/vi/{$videoId}/sddefault.jpg",
        'MEDIUM' => "//img.youtube.com/vi/{$videoId}/mqdefault.jpg",
        'HIGH' => "//img.youtube.com/vi/{$videoId}/hqdefault.jpg",
        'MAX_HIGH' => "//img.youtube.com/vi/{$videoId}/maxresdefault.jpg",
    ];
}

/**
 * @param string $url
 * @return string
 */
function getYoutubeVideoId(string $url): string
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

    return $match[1];
}

/**
 * @param string $url
 * @return array
 */
function getYoutube(string $url): array
{
    $youtube = "http://www.youtube.com/oembed?url={$url}&format=json";

    $curl = curl_init($youtube);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $return = curl_exec($curl);
    curl_close($curl);

    return json_decode($return, true);
}
