<?php
$this->setFrameMode(true);
?>

<link rel="stylesheet" href="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/video-js.min.css'; ?>">
<style>
    .video-js_popup {
        opacity: 0;
    }
    .video-js_popup.my-video-dimensions {
        opacity: 1;
    }
</style>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div id="video" class="video-js-wrap">
        <?php foreach ($arResult['ITEMS'] as $key => $value): ?>
            <?php if (!empty($value['DISPLAY_PROPERTIES']['FILE'])): ?>
                <video id="my-video" class="video-js video-js_popup" data-setup="{'fluid:true'}" controls autoplay preload="auto" poster="<?= resizeImage($value['PREVIEW_PICTURE'], 799, 451, BX_RESIZE_IMAGE_EXACT); ?>">
                    <source src="<?= $value['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC']; ?>" type="<?= $value['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['CONTENT_TYPE']; ?>">
                </video>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif;  ?>

<script src="<?= SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/video-js.min.js'; ?>"></script>