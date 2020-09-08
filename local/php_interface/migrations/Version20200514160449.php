<?php

namespace Sprint\Migration;


class Version20200514160449 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('USER_NOTIFY', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Уведомление пользователю о заявке с конфигуратора',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
        $helper->Event()->saveEventType('USER_NOTIFY', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Уведомление пользователю о заявке с конфигуратора',
  'DESCRIPTION' => '',
  'SORT' => '150',
));
        $helper->Event()->saveEventMessage('USER_NOTIFY', array (
  'LID' => 
  array (
    0 => 'en',
    1 => 's1',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => '#DEFAULT_EMAIL_FROM#',
  'EMAIL_TO' => '#EMAIL#',
  'SUBJECT' => 'Спасибо за заявку',
  'MESSAGE' => 'Здравствуйте, #NAME#! 
 
Прекрасный выбор! Ваша заявка на Комбинированную дорожную машину сформирована. В ближайшее время вам перезвонит менеджер чтобы уточнить детали. 

Ответы на часто задаваемые вопросы - #SERVER_NAME#',
  'BODY_TYPE' => 'text',
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
  'EVENT_TYPE' => '[ USER_NOTIFY ] Уведомление пользователю о заявке с конфигуратора',
));
    }

    public function down()
    {
        //your code ...
    }
}
