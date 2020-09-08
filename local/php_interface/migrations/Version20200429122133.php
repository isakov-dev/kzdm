<?php

namespace Sprint\Migration;


class Version20200429122133 extends Version
{
    protected $description = "свойство в форме заявка на лизинг";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('leasing', 'forms');

    }

    public function down()
    {
        //your code ...
    }
}
