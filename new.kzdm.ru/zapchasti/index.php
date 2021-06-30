<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Запчасти');
$APPLICATION->SetPageProperty('title', 'Запчасти на коммунальную технику. Купить запасные части для дорожных машин и спецтехники');
$APPLICATION->SetPageProperty('description', '90% запчастей для специальной техники в наличии на складе! Отгружаем в течение рабочего дня с момента оплаты!');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
                <div class="single__desc">
                    <p>
                        90% запчастей в наличии на складе. Отгружаем в течение рабочего дня с момента оплаты.<br>
                    </p>
                    <p>
                        Бесплатно доставим ваш заказ до терминала любой транспортной компании<br>
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
                        ], false); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
