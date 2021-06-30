<?php $APPLICATION->IncludeComponent('sunmedia:forms', 'blueform', [
    'IBLOCK_ID' => 27,
    'EVENT_NAME' => 'NEW_CONSULT',
    'FORM_ID' => 'consult',
    'FIELDS' => [
        'PHONE' => [
            'TYPE' => 'TEL',
            'REQUIRED' => false,
        ],
    ]
], false); ?>