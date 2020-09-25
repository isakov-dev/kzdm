<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

class Logic {

    private const PROTOCOL = "https://";
    private const DOMAIN = "kzdm.ru";
    private const CATALOG_ID = 1;

    public static function getGoogleFeed() {

        $csvContent = '';

        CModule::IncludeModule('iblock');

        $sections = array();
        $arFilter = array('IBLOCK_ID' => IntVal(self::CATALOG_ID));
        $rsSections = CIBlockSection::GetList(array('id' => 'asc'), $arFilter);

        while ($arSection = $rsSections->Fetch()) {
            $sections[$arSection['ID']] = $arSection['NAME'];
        }

        $fieldsLine = false;
        $arSelect = Array("ID", "NAME", "IBLOCK_SECTION", "DETAIL_PAGE_URL", "DETAIL_PICTURE");
        $arFilter = Array("IBLOCK_ID" => IntVal(self::CATALOG_ID), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(Array('id' => 'asc'), $arFilter, false, false, $arSelect);

        while($ob = $res->GetNextElement()) {

            $arFields = $ob->GetFields();

            $feedLine = array(
                "id" => $arFields['ID'],
                "title" => $arFields['NAME'],
                "link" => self::PROTOCOL . self::DOMAIN . $arFields['DETAIL_PAGE_URL'],
                "image_link" => ($arFields['DETAIL_PICTURE'] ?
                    self::PROTOCOL . self::DOMAIN . CFile::GetPath($arFields['DETAIL_PICTURE']) : ""),
                "product_type" => ($sections[$arFields['IBLOCK_SECTION_ID']] ?
                    $sections[$arFields['IBLOCK_SECTION_ID']] : ""),
                "availability" => "in_stock",
                "price" => "1 RUB",
            );

            if (!$fieldsLine) {
                $csvContent .= implode("|", array_keys($feedLine));
                $csvContent .= PHP_EOL;
                $fieldsLine = true;
            }

            $csvContent .= implode("|", $feedLine);
            $csvContent .= PHP_EOL;

        }

        return $csvContent;

    }

}