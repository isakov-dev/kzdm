<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult)): ?>
    <?= SITE_ID == 'en' ? $arResult['TEXT_EN'] : $arResult['TEXT']; ?>
<?php endif; ?>
