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
        define('YANDEX_METRIKA_ID', 47759659);
        define('GOOGLE_ANALYTICS_ID', 'UA-184483004-1');
        define('GOOGLE_VERIFICATION', false);
        define('CMSMAGAZINE', false);
        define('CLARITY', false);
        break;
    case 'ru':
        define('YANDEX_METRIKA_ID', 45274878);
        define('GOOGLE_ANALYTICS_ID', 'UA-116744247-1');
        define('GOOGLE_VERIFICATION', 'HyyYjGi4oP0oTX2RE177JjxaPfr3iPQ05qUZ1FA2eSM');
        define('CMSMAGAZINE', '4be1bfa70b3d4b0b650c5469488496b4');
        define('CLARITY', '3vgkkdbmhb');
        break;
    case 'net':
        define('YANDEX_METRIKA_ID', false);
        define('GOOGLE_ANALYTICS_ID', false);
        define('GOOGLE_VERIFICATION', false);
        define('CMSMAGAZINE', false);
        define('CLARITY', false);
        break;
}