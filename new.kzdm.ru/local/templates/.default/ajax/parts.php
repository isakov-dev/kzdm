<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'parts', [
    'IBLOCK_ID' => 51,
    'EVENT_NAME' => 'NEW_PARTS_REQUEST',
    'CACHE_TYPE' => 'N',
    'FORM_ID' => 'parts',
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
