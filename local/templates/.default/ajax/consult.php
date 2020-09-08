<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent('sunmedia:forms', 'blueform.homepage', [
    'IBLOCK_ID' => 27,
    'EVENT_NAME' => 'NEW_CONSULT',
    'FORM_ID' => 'consult',
    'CACHE_TYPE' => 'N',
    'FIELDS' => [
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
    ]
], false);
