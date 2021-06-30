<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = ['NAME'        => Loc::getMessage('COMPONENT_SOC_NAME'),
                           'DESCRIPTION' => Loc::getMessage('COMPONENT_SOC_DESCRIPTION'),
                           'ICON'        => '/images/icon.gif',
                           'COMPLEX'     => 'N',
                           'PATH'        => ['ID'    => 'sunmedia']
                        ];