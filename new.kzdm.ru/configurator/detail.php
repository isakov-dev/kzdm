<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/configurator.css');
?>
<div class="single">
    <div class="wrapper wrapper_default">
        <div class="row">
        <?$APPLICATION->IncludeComponent(
            "sunmedia:configurator",
            "",
            Array(
                
            )
        );?>
           
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>