<?php

namespace Sprint\Migration;


class Version20200428104604 extends Version
{
    protected $description = "свойство каталога англ.";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('catalog_en', 'catalog_en');

    }

    public function down()
    {
        //your code ...
    }
}
