<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'callback', [
    'IBLOCK_ID' => 26,
    'EVENT_NAME' => 'NEW_CALLBACK',
    'CACHE_TYPE' => 'N',
    'FORM_ID' => 'callback',
    'FIELDS' => [
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
        'MESSAGE' => [
            'TYPE' => 'TEXTAREA',
            'REQUIRED' => false,
        ]
    ]
], false);
