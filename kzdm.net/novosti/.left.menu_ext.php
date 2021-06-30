<?php

global $APPLICATION;

try {
    \Bitrix\Main\Loader::includeModule('iblock');

    $aMenuLinksExt = $APPLICATION->IncludeComponent(
        'sunmedia:menu.sections',
        '',
        [
            'IS_SEF' => 'Y',
            'SEF_BASE_URL' => '/',
            'SECTION_PAGE_URL' => '/novosti/#SECTION_CODE_PATH#/',
            'DETAIL_PAGE_URL' => '/novosti/#SECTION_CODE_PATH#/#ELEMENT_CODE#',
            'IBLOCK_TYPE' => 'content_en',
            'IBLOCK_ID' => '36',
            'DEPTH_LEVEL' => '1',
            'CACHE_TYPE' => 'A',
            'CACHE_TIME' => '36000000',
            'COMPOSITE_FRAME_MODE' => 'A',
            'COMPOSITE_FRAME_TYPE' => 'AUTO'
        ],
        false
    );

    $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
} catch (\Bitrix\Main\LoaderException $e) {
    echo $e->getMessage();
}
