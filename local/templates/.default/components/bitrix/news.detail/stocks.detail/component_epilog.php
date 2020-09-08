<?php

if (!empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE'])) {
    $APPLICATION->SetPageProperty('title', $arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE']);
    $APPLICATION->SetTitle($arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE']);
} else {
    $APPLICATION->SetPageProperty('title', $arResult['NAME']);
    $APPLICATION->SetTitle($arResult['NAME']);
}

if (!empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_KEYWORDS'])) {
    $APPLICATION->SetPageProperty('keywords', $arResult['IPROPERTY_VALUES']['ELEMENT_META_KEYWORDS']);
}

if (!empty($arResult['IPROPERTY_VALUES']['ELEMENT_META_DESCRIPTION'])) {
    $APPLICATION->SetPageProperty('description', $arResult['IPROPERTY_VALUES']['ELEMENT_META_DESCRIPTION']);
}