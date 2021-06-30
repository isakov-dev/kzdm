<?php
  
IncludeModuleLangFile(__FILE__);

class UserDataColor extends CUserTypeString {

    function GetUserTypeDescription() {
        return array(
            "USER_TYPE_ID" => "color",
            "CLASS_NAME" => "UserDataColor",
            "DESCRIPTION" => GetMessage('COLORPICKER_PROPERTY_NAME'),
            "BASE_TYPE" => "int",
        );
    }

    function GetIBlockPropertyDescription() {
        return array(
            "PROPERTY_TYPE" => "S",
            "USER_TYPE" => "color",
            "DESCRIPTION" => GetMessage('COLORPICKER_PROPERTY_NAME'),
            'GetPropertyFieldHtml' => array('UserDataColor', 'GetPropertyFieldHtml'),
            'GetAdminListViewHTML' => array('UserDataColor', 'GetAdminListViewHTML'),
        );
    }

    function getViewHTML($name, $value) {
        return '<div style="display: block; border: 1px solid;
                            border-radius: 25px;
                            display: block;
                            height: 30px;
                            width: 30px; background-color: #' . $value . '">&nbsp;</div>';
    }

 
    function getEditHTML($name, $value, $is_ajax = false) {
        $pathToLib = "/bitrix/js/qcreative.colorpicker/";  
        $uid = 'x' . uniqid();
        $dom_id = $uid;
        CJSCore::Init(array("jquery")); 
        ob_start();
        ?> 
        <script type='text/javascript' src='<?= $pathToLib ?>jpicker-1.1.6.js'></script>
        <input type='text' id='element<?= $dom_id ?>' name='<?= $name ?>' value='<?= $value ?>' />
        <script>
            $(document).ready(function() {
                $('#element<?= $dom_id ?>').jPicker({
                    images:
                            {
                                clientPath: '<?= $pathToLib ?>images/'
                            },
                    localization:
                            {
                                text:
                                        {
                                            title: '���������� ������ ��� ������ �����',
                                            newColor: '�����',
                                            currentColor: '�������',
                                            ok: '�������',
                                            cancel: '��������'
                                        },
                                tooltips:
                                        {
                                            colors:
                                                    {
                                                        newColor: '����� ���� - ������� ��������� ��� �������������',
                                                        currentColor: '������� ��� �������� ��������������� �����'
                                                    },
                                            buttons:
                                                    {
                                                        ok: '������� ��� ������ �������� �����',
                                                        cancel: '������� ��� �������� ��������������� �����'
                                                    },
                                            hue:
                                                    {
                                                        radio: 'Set To �Hue� Color Mode',
                                                        textbox: 'Enter A �Hue� Value (0-360�)'
                                                    },
                                            saturation:
                                                    {
                                                        radio: 'Set To �Saturation� Color Mode',
                                                        textbox: 'Enter A �Saturation� Value (0-100%)'
                                                    },
                                            value:
                                                    {
                                                        radio: 'Set To �Value� Color Mode',
                                                        textbox: 'Enter A �Value� Value (0-100%)'
                                                    },
                                            red:
                                                    {
                                                        radio: 'Set To �Red� Color Mode',
                                                        textbox: 'Enter A �Red� Value (0-255)'
                                                    },
                                            green:
                                                    {
                                                        radio: 'Set To �Green� Color Mode',
                                                        textbox: 'Enter A �Green� Value (0-255)'
                                                    },
                                            blue:
                                                    {
                                                        radio: 'Set To �Blue� Color Mode',
                                                        textbox: 'Enter A �Blue� Value (0-255)'
                                                    },
                                            alpha:
                                                    {
                                                        radio: 'Set To �Alpha� Color Mode',
                                                        textbox: 'Enter A �Alpha� Value (0-100)'
                                                    },
                                            hex:
                                                    {
                                                        textbox: 'Enter A �Hex� Color Value (#000000-#ffffff)',
                                                        alpha: 'Enter A �Alpha� Value (#00-#ff)'
                                                    }
                                        }
                            }
                });
            });
        </script>
    <?
        $HTML = ob_get_clean();
        return $HTML;
    }

    function GetEditFormHTML($arUserField, $arHtmlControl) {
        return self::getEditHTML($arHtmlControl['NAME'], $arHtmlControl['VALUE'], false);
    }

    function GetAdminListEditHTML($arUserField, $arHtmlControl) {
        return self::getViewHTML($arHtmlControl['NAME'], $arHtmlControl['VALUE'], true);
    }

    function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName) {
        return self::getViewHTML($strHTMLControlName['VALUE'], $value['VALUE']);
    }

    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName) {
        return $strHTMLControlName['MODE'] == 'FORM_FILL' ? self::getEditHTML($strHTMLControlName['VALUE'], $value['VALUE'], false) : self::getViewHTML($strHTMLControlName['VALUE'], $value['VALUE']);
    }

};
