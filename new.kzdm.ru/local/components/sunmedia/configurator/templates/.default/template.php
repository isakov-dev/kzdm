<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;
$element=$arResult['ELEMENT'];
$oborud=$arResult['ALL_OBORUD_SEC'];
if ($element['PREVIEW_PICTURE']) {
    $srcElement=resizeImage($element['PREVIEW_PICTURE'],511,200);
}
$this->addExternalJS(SITE_DEFAULT_TEMPLATE_PATH."/assets/js/configurator.js");
?> 
<div class="col col--lg-8 equipment">
    <div class="equipment__info">
        <span class="equipment__data"><?=$element['PREVIEW_TEXT']?></span>
        <a href="/configurator/" class="equipment__back "><?= Bitrix\Main\Localization\Loc::getMessage('BACK_TO_FILTER'); ?></a>
    </div>
    <h1 class="equipment__header"><?= Bitrix\Main\Localization\Loc::getMessage('CHOOSE_OBORUD'); ?></h1>
    <?foreach($oborud as $section){?>
    <div class="equipment__block trigger">
        <h2 class="equipment__name trigger-name"><?=$section['SECTION']['NAME']?></h2>
        <div class="equipment__items trigger-content">
            <?foreach($section['ELS'] as $el){
                $src=false;
                if ($el['PREVIEW_PICTURE']) {
                    $src=resizeImage($el['PREVIEW_PICTURE'],229,106);
                }
                $class="";
                if (!in_array($el['ID'],$element['PROPERTY_OBORUD_VALUE'])) {
                    $class="not-suitable";
                }
                else if (in_array($el['ID'],$element['PROPERTY_DEFAULT_OBORUD_VALUE'])) {
                    $class="choise";
                }
                ?>
            <div class="equipment__item complektTrigger <?=$class?>" data-id="<?=$el['ID']?>">
                <?if ($src) {?>
                    <div class="equipment__item-img">
                        <img src="<?=$src?>" alt="<?=$el['NAME']?>">
                    </div>
                <?}?>
                <span class="equipment__item-name"><?=$el['NAME']?></span>
                <span class="equipment__item-characteristic"><?=$el['PREVIEW_TEXT']?></span>
                <?if ($el['DETAIL_TEXT']) {?>
                <div class="equipment__more">
                    <div class="equipment__more-header"><?=$el['NAME']?></div>
                    <div class="equipment__more-info"><?=$el['DETAIL_TEXT']?></div>
                </div>
                <?}?>
            </div>  
            <?}?>                                  
        </div>
    </div> 
    <?}?>                     
</div>
<script data-skip-moving="true">
    var allEls=<?=json_encode($arResult['ALL_ELS'])?>;
    var exceptEls=<?=json_encode($arResult['EXCEPT_ELS'])?>;    
    </script>
<div class="col col--lg-4">
    <div class="offer"  id="yourequipment">
        <?if ($srcElement) {?>
            <div class="offer__img">
                <img src="<?=$srcElement?>" alt="<?=$element['NAME']?>">
            </div>
        <?}?>
        <a href="#" data-fancybox data-src="#commercial">
            <button class="btn btn_orange offer__btn" id="send_commerce"><?= Bitrix\Main\Localization\Loc::getMessage('GET_COMMERCE'); ?></button>
        </a>
        <input type="hidden" id="config_base_name" value="<?=$element['NAME']?>">
        <div class="offer__info">
            <div class="offer__header">Ваша комплектация</div>
            <div class="offer__items" id="complekt_total">
               
            
            </div>
        </div>
    </div>
</div>
<div id="commercial" class="commercial">
    <div class="commercial__header">Конфигурация сформирована</div>
    <div class="commercial__wrapper">
        <div class="commercial__done">
            <div class="car__item commercial__car">
                <div class="car__img">
                    <img src="<?=$srcElement?>" alt="<?=$element['NAME']?>">
                </div>
                <div class="car__name"><?=$element['NAME']?></div>
                <div class="car__info">
                    <div class="car__infoname">
                        <?if ($element['PROPERTY_GRUZOPOD_VALUE']){?>
                        <p class="car__infoname-name">Грузоподъемность</p>
                        <?}?>
                        <?if ($element['PROPERTY_POWER_VALUE']){?>
                        <p class="car__infoname-name">Мощность двигателя</p>
                        <?}?>
                        <?if ($element['PROPERTY_PESOK_VALUE']){?>
                        <p class="car__infoname-name">Объём бункера</p>
                        <?}?>
                    </div>
                    <div class="car__infodata">
                    <?if ($element['PROPERTY_GRUZOPOD_VALUE']){?>
                        <p class="car__infodata-data"><?=$element['PROPERTY_GRUZOPOD_VALUE']?></p>
                    <?}?>
                    <?if ($element['PROPERTY_POWER_VALUE']){?>
                        <p class="car__infodata-data"><?=$element['PROPERTY_POWER_VALUE']?></p>
                    <?}?>
                    <?if ($element['PROPERTY_PESOK_VALUE']){?>
                        <p class="car__infodata-data"><?=$element['PROPERTY_PESOK_VALUE']?></p>
                    <?}?>
                    </div>
                </div>
            </div>
            <div class="commercial__done-img">
                <img src="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/done.svg" alt="">
            </div>
        </div>
<?php $APPLICATION->IncludeComponent('sunmedia:forms', 'configurator', [
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
        </div>
</div>