<?php
$arUrlRewrite=array (
  13 => 
  array (
    'CONDITION' => '#^/configurator/([\\w,-]+)/(?:\\?.*)?#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/configurator/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/en/servis/([\\w,-]+)/(?:\\?.*)?#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/en/servis/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/en/aktsii/([\\w,-]+)/(?:\\?.*)?#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/en/aktsii/detail.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/servis/([\\w,-]+)/(?:\\?.*)?#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/servis/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/aktsii/([\\w,-]+)/(?:\\?.*)?#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/aktsii/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/en/search/?q=([\\w,-]+)',
    'RULE' => 'QUERY=$1',
    'ID' => 'sunmedia:search',
    'PATH' => '/en/search/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/search/?q=([\\w,-]+)',
    'RULE' => 'QUERY=$1',
    'ID' => 'sunmedia:search',
    'PATH' => '/search/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/en/oborudovaniye/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/en/oborudovaniye/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/add-to-compare/#',
    'RULE' => '',
    'PATH' => '/local/templates/.default/ajax/comparison.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/oborudovaniye/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/oborudovaniye/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/en/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/en/catalog/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/en/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/en/novosti/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/novosti/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
);
