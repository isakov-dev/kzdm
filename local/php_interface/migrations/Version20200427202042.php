<?php

namespace Sprint\Migration;


class Version20200427202042 extends Version
{
    protected $description = "Изменения свойство Техника для конфигуратора";

    protected $moduleVersion = "3.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('config-technika', 'configurator');
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Полная масса',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'GRUZOPOD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Мощность двигателя',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'POWER',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Пескоразбрасывающее оборудование, объем',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'PESOK',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '2,5 - 3,5 м3',
      'DEF' => 'N',
      'SORT' => '100',
      'XML_ID' => 'b57de7c3670a0c5f3a4cc4fb7c4d6a36',
    ),
    1 => 
    array (
      'VALUE' => '4,5 - 6,5 м3',
      'DEF' => 'N',
      'SORT' => '200',
      'XML_ID' => 'db4d857a76fc7b90649d95d62ff02895',
    ),
    2 => 
    array (
      'VALUE' => '6,5 - 8,5 м3',
      'DEF' => 'N',
      'SORT' => '300',
      'XML_ID' => '03f38ed750c3fe63284be9a3b088d8b5',
    ),
    3 => 
    array (
      'VALUE' => '9,5 - 11 м3',
      'DEF' => 'N',
      'SORT' => '400',
      'XML_ID' => 'e4e71ff4f7f3aeaf8533dd44c1c42d64',
    ),
  ),
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Подходящее оборудование',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'OBORUD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'E',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => 'configurator:config-oborud',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Оборудование по умолчанию',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DEFAULT_OBORUD',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'E',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => 'configurator:config-oborud',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Поливомоечное',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'POLIV',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '4 м3',
      'DEF' => 'N',
      'SORT' => '100',
      'XML_ID' => 'ee823f99236bf8092bdf05e936588fcf',
    ),
    1 => 
    array (
      'VALUE' => '8 м3',
      'DEF' => 'N',
      'SORT' => '200',
      'XML_ID' => '66c79edd263cff4ab2a122683d93dfee',
    ),
    2 => 
    array (
      'VALUE' => '10 м3',
      'DEF' => 'N',
      'SORT' => '300',
      'XML_ID' => '44c7101b100549068331f37a914a7648',
    ),
  ),
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Осность',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'OSNOST',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => '',
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '4*2',
      'DEF' => 'N',
      'SORT' => '100',
      'XML_ID' => '0fa840c5bae816179bdac8d55dfbf17d',
    ),
    1 => 
    array (
      'VALUE' => '6*4',
      'DEF' => 'N',
      'SORT' => '200',
      'XML_ID' => '92861b4a0209b876b07a4fd89f86003f',
    ),
    2 => 
    array (
      'VALUE' => '6*6',
      'DEF' => 'N',
      'SORT' => '300',
      'XML_ID' => '44f1302aa9bf15deb0648f72ba8d0054',
    ),
  ),
));

    }

    public function down()
    {
        //your code ...
    }
}
