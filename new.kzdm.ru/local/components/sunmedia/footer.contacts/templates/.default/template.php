<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)) {

    switch (DOMAIN_ZONE) {
        case 'kz':
            echo $arResult['TEXT_KZ'];
            break;
        case 'ru':
            echo $arResult['TEXT'];
            break;
        case 'net':
            echo $arResult['TEXT_EN'];
            break;
    }

}?>
