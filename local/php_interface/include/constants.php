<?php

define('ENV', 'prod');
define('SITE_DEFAULT_TEMPLATE_PATH', getLocalPath('templates/.default', BX_PERSONAL_ROOT));
define('DOMAIN', 'kzdm.ru');
define('EN_DOMAIN', 'kzdm.net');

if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    define('PROTOCOL', 'https://');
} else {
    define('PROTOCOL', 'http://');
}

$explodedDomain = explode('.', $_SERVER['SERVER_NAME']);
$domainZone = end($explodedDomain);
define('DOMAIN_ZONE', $domainZone);
switch ($domainZone) {
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