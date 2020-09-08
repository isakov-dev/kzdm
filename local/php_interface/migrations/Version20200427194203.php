<?php

namespace Sprint\Migration;


class Version20200427194203 extends Version
{
    protected $description = "Событие заявки конфигуратора";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('NEW_CONFIGURATOR', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новая заявка с конфигуратора',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
        $helper->Event()->saveEventType('NEW_CONFIGURATOR', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Новая заявка с конфигуратора',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
        $helper->Event()->saveEventMessage('NEW_CONFIGURATOR', array (
  'LID' => 
  array (
    0 => 'en',
    1 => 's1',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => 'jonni2008_90@mail.ru',
  'SUBJECT' => 'Новая заявка с конфигуратора',
  'MESSAGE' => '<h3>Новая заявка с конфигуратора</h3>
<div><b>Номер телефона:</b> #PHONE#</div>
<div><b>Email:</b> #EMAIL#</div>
<div><b>Носитель:</b> #BASE_ITEM#</div>
<div><b>Выбранное оборудование:</b> #ITEMS#</div>

<div>Сообщение сгенерировано автоматически.</div>',
  'BODY_TYPE' => 'html',
  'BCC' => '',
  'REPLY_TO' => '',
  'CC' => '',
  'IN_REPLY_TO' => '',
  'PRIORITY' => '',
  'FIELD1_NAME' => '',
  'FIELD1_VALUE' => '',
  'FIELD2_NAME' => '',
  'FIELD2_VALUE' => '',
  'SITE_TEMPLATE_ID' => '',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => '',
  'EVENT_TYPE' => '[ NEW_CONFIGURATOR ] Новая заявка с конфигуратора',
));
    }

    public function down()
    {
        //your code ...
    }
}
