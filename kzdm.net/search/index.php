<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $APPLICATION->IncludeComponent('sunmedia:search', '', [
        'SITE_ID' => SITE_ID,
        'MODULE_ID' => false,
        'CHECK_DATES' => 'Y',
        'SEARCH_PARAM' => [
            [
                '!URL' => false,
                'MODULE_ID' => 'iblock',
                'PARAM1' => 31,
            ],
        ]
    ]);
} else {
    http_response_code(403);
    die('Silence is golden.');
}