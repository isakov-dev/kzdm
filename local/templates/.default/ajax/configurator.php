<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'configurator', [
    'IBLOCK_ID' => getIblockIdByCode("orders-configurator"),
    'EVENT_NAME' => 'NEW_CONFIGURATOR',
    'CACHE_TYPE' => 'N',
    'FORM_ID' => 'configurator',
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
        'BASE_ITEM' => [
            'TYPE' => 'HIDDEN',
            'REQUIRED' => false,
        ],
        'ITEMS' => [
            'TYPE' => 'HIDDEN',
            'REQUIRED' => false,
        ],
    ]
], false); ?>