<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Сравнение техники');
$APPLICATION->SetPageProperty('title', 'Сравнение техники');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
                <div class="single__desc">
                    <p>
                        Для обеспечения бесперебойной работы специальной техники наших клиентов, осуществляет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $APPLICATION->IncludeComponent(
        "bitrix:catalog.compare.list",
        "compare.list",
        array(
            "ACTION_VARIABLE" => "action",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "COMPARE_URL" => SITE_DIR . "sravneniye/",
            "COMPONENT_TEMPLATE" => ".default",
            "DETAIL_URL" => "",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "catalog",
            "NAME" => "COMPARE_LIST",
            "POSITION" => "top left",
            "POSITION_FIXED" => "Y",
            "PRODUCT_ID_VARIABLE" => "id"
        )
    ); ?>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
