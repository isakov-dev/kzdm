    
    <form id="configurator-form" action="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/ajax/configurator.php"class="commercial__form" method="post" enctype="application/x-www-form-urlencoded">
    <p class="commercial__alert">Введите ваши контактные данные, мы вышлем на элекронную почту данную конфигурацию. <br> Наш менеджер свяжется с вами и вышлет коммерческое предложение.</p>
    <?= bitrix_sessid_post(); ?>
    <?php if (!empty($arParams['FIELDS'])): ?>
                <?php foreach ($arParams['FIELDS'] as $key => $value): ?>
                    <div class="form-field">
                        <input type="<?= strtolower($value['TYPE']); ?>" class="<?if ($value['TYPE'] == "TEL") {?>phone-mask<?}?> form-field" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage($key); ?>" autocomplete="off" name="<?= $key; ?>"<?= $value['REQUIRED'] ? ' required' : false; ?>>
                        <span class="error-msg"></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
   
    <p class="commercial__conf">Нажимая кнопку «Отправить» вы даете согласие на обработку ваших персональных данных</p>
    <button type="submit" class="btn btn_orange commercial__btn">Отправить</button>
    </form>