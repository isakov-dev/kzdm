<?php

define('ENV', 'prod');
define('SITE_DEFAULT_TEMPLATE_PATH', getLocalPath('templates/.default', BX_PERSONAL_ROOT));
define('DOMAIN', (ENV === 'prod') ? 'kzdm.ru' : 'new.kzdm.ru');

$explodedDomain = explode('.', $_SERVER['SERVER_NAME']);
define('YANDEX_METRIKA_ID', (end($explodedDomain) == 'kz' ? '47759659' : '45274878'));