<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'test.drive', [
    'IBLOCK_ID' => 56,
    'EVENT_NAME' => 'NEW_TEST_DRIVE',
    'FORM_ID' => 'spare',
    'UPLOADED' => true,
    'FIELDS' => [
        'NAME' => [
            'TYPE' => 'TEXT',
            'REQUIRED' => false,
        ],
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
        'EMAIL' => [
            'TYPE' => 'EMAIL',
            'REQUIRED' => false,
        ],
        'ITEM' => [
            'TYPE' => 'SELECT',
            'ITEMS_IBLOCK_ID' => 1,
            'REQUIRED' => false,
        ],
        'MESSAGE' => [
            'TYPE' => 'TEXTAREA',
            'REQUIRED' => false,
        ],
    ]
], false);
