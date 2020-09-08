<?php

namespace Sprint\Migration;


class Version20200429122106 extends Version
{
    protected $description = "свойство в форме обратный звонок";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('callback', 'forms');

    }

    public function down()
    {
        //your code ...
    }
}
