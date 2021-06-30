<?php

if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as $key => $value) {
        if ($value['CODE'] == 'kurgan') {
            $arResult['ITEMS'][$key]['DOMAIN'] = '//' . DOMAIN . SITE_DIR;
        } else {
            $arResult['ITEMS'][$key]['DOMAIN'] = '//' . $value['CODE'] . '.' . DOMAIN . SITE_DIR;
        }
    }
}
