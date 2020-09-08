<?php

namespace Sprint\Migration;


class Version20200429122209 extends Version
{
    protected $description = "свойство в форме заявка на тест-драйв";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('test_drive', 'forms');

    }

    public function down()
    {
        //your code ...
    }
}
