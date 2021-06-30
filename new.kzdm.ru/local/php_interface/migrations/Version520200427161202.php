<?php

namespace Sprint\Migration;


class Version520200427161202 extends Version
{
    protected $description = "изображения для описания в каталоге англ.";

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
