<?php
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <div style="display: none;" id="video">
        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
            <?php if (!empty($value['DISPLAY_PROPERTIES']['FILE'])): ?>
                <video id="my-video" class="video-js" data-setup="{'fluid:true'}" controls preload="auto" poster="<?= resizeImage($value['PREVIEW_PICTURE'], 799, 451, BX_RESIZE_IMAGE_EXACT); ?>">
                    <source src="<?= $value['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC']; ?>" type="<?= $value['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['CONTENT_TYPE']; ?>">
                </video>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif;  ?>