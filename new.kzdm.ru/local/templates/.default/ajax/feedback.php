<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'feedback', [
    'IBLOCK_ID' => 25,
    'EVENT_NAME' => 'NEW_FEEDBACK',
    'FORM_ID' => 'feedback',
    'FIELDS' => [
        'NAME' => [
            'TYPE' => 'TEXT',
            'REQUIRED' => false,
        ],
        'EMAIL' => [
            'TYPE' => 'EMAIL',
            'REQUIRED' => false,
        ],
        'MESSAGE' => [
            'TYPE' => 'TEXTAREA',
            'REQUIRED' => false,
        ]
    ]
], false);
