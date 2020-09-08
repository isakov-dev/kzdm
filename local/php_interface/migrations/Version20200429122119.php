<?php

namespace Sprint\Migration;


class Version20200429122119 extends Version
{
    protected $description = "свойство в форме консультация";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('consult', 'forms');

    }

    public function down()
    {
        //your code ...
    }
}
