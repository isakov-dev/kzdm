<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'leasing', [
    'IBLOCK_ID' => 49,
    'EVENT_NAME' => 'NEW_LEASING',
    'CACHE_TYPE' => 'N',
    'FORM_ID' => 'leasing',
    'FIELDS' => [
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
        'ITEM' => [
            'TYPE' => 'HIDDEN',
            'REQUIRED' => false,
        ],
        'MESSAGE' => [
            'TYPE' => 'TEXTAREA',
            'REQUIRED' => false,
        ]
    ]
], false);
