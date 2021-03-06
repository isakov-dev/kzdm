<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Sign up for a "test drive"');
$APPLICATION->SetPageProperty('title', 'Sign up for a "test drive"');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        Для обеспечения бесперебойной работы специальной техники наших клиентов, осуществляет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "inner",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "about",
            "USE_EXT" => "N"
        )
    );?>
    <div class="section section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="single single_offset">
                <div class="row">
                    <div class="col col--xl-4 col--xl-offset-4 col--sm-8 col--sm-offset-2">
                        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'test.drive', [
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
                            ]
                        ], false); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
