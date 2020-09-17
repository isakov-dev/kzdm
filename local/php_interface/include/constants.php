<?php

define('ENV', 'prod');
define('SITE_DEFAULT_TEMPLATE_PATH', getLocalPath('templates/.default', BX_PERSONAL_ROOT));
define('DOMAIN', 'kzdm.ru');

$explodedDomain = explode('.', $_SERVER['SERVER_NAME']);
switch (end($explodedDomain)) {
    case 'kz':
        define('YANDEX_METRIKA_ID', '47759659');
        break;
    case 'ru':
        define('YANDEX_METRIKA_ID', '45274878');
        break;
    case 'net':
        define('YANDEX_METRIKA_ID', false);
        break;
}