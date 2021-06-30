<?php

if (!empty($arResult['IPROPERTY_VALUES']) && $arResult['ID'] > 0) {
    $APPLICATION->SetTitle($arResult['IPROPERTY_VALUES']['SECTION_META_TITLE']);
    $APPLICATION->SetPageProperty('title', $arResult['IPROPERTY_VALUES']['SECTION_META_TITLE']);
    $APPLICATION->SetPageProperty('keywords', $arResult['IPROPERTY_VALUES']['SECTION_META_KEYWORDS']);
    $APPLICATION->SetPageProperty('description', $arResult['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION']);
} elseif($arResult['ID'] > 0) {
    $APPLICATION->SetTitle($arResult['NAME']);
    $APPLICATION->SetPageProperty('title', $arResult['NAME']);
}
