<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class SearchComponent
 */
class SearchFormComponent extends \CBitrixComponent
{
    /**
     * Стартуем компонент
     *
     * @return mixed|void|null
     */
    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
