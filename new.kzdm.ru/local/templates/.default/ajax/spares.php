<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'spares', [
    'IBLOCK_ID' => 50,
    'EVENT_NAME' => 'NEW_SPARE',
    'FORM_ID' => 'spare',
    'UPLOADED' => true,
    'FIELDS' => [
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
        'EMAIL' => [
            'TYPE' => 'EMAIL',
            'REQUIRED' => false,
        ],
        'ITEM' => [
            'TYPE' => 'TEXT',
            'REQUIRED' => false,
        ],
        'SPARE' => [
            'TYPE' => 'TEXT',
            'REQUIRED' => false,
        ],
        'MESSAGE' => [
            'TYPE' => 'TEXTAREA',
            'REQUIRED' => false,
        ],
        'PHOTO' => [
            'TYPE' => 'FILE',
            'REQUIRED' => false,
        ],
    ]
], false);
