<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Spare parts');
$APPLICATION->SetPageProperty('title', 'Spare parts');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        To ensure the smooth operation of our customers' special equipment, it carries out
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="single single_offset">
                <div class="row">
                    <div class="col col--xl-4 col--xl-offset-4 col--sm-8 col--sm-offset-2">
                        <?php $APPLICATION->IncludeComponent('sunmedia:forms', 'spares', [
                            'IBLOCK_ID' => 50,
                            'EVENT_NAME' => 'NEW_SPARE',
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
                                'PHOTO' => [
                                    'TYPE' => 'FILE',
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
