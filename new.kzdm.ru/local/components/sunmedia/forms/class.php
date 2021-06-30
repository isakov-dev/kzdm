<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class FormsComponent
 */
class FormsComponent extends \CBitrixComponent
{
    protected $errors = [];
    protected $fields = [];
    protected $response = [
        'success' => false,
    ];
    protected $data = [];

    /**
     * Отправляем данные с формы
     */
    protected function actionSend(): void
    {
        if ($this->validateForm() && $id = $this->saveFormData($this->arParams['IBLOCK_ID'])) {
            $element = \CIBlockElement::GetByID($id)->GetNextElement();
            $elementFields = $element->GetFields();
            $elementProperties = $element->GetProperties();

            $emailFields = array_map(function ($item) {
                return $item['VALUE'];
            }, $elementProperties);
            $emailFields['ID'] = (integer)$elementFields['ID'];
            foreach ($elementProperties as $key => $value) {
                $emailFields[$key] = $value['VALUE'];
            }

            if (isset($this->arParams['UPLOADED']) && $this->arParams['UPLOADED']) {
                if (\CEvent::Send($this->arParams['EVENT_NAME'], SITE_ID, $emailFields, 'Y', '', !empty($elementProperties['PHOTO']['VALUE']) ? $elementProperties['PHOTO']['VALUE'] : [])) {
                    $this->response['success'] = true;
                }
            } else {
                if (\CEvent::Send($this->arParams['EVENT_NAME'], SITE_ID, $emailFields)) {
                    if ($this->arParams['EVENT_NAME'] == "NEW_CONFIGURATOR") {
                        //отправим сообщение пользователю
                        $emailFieldsUser=[
                            "NAME"=>$emailFields['NAME'],
                            "EMAIL"=>$emailFields['EMAIL']
                        ];
                        \CEvent::Send("USER_NOTIFY", SITE_ID, $emailFieldsUser);
                    }
                    $this->response['success'] = true;
                }
            }
        } else {
            $this->response['errors'] = $this->errors;
        }
    }

    /**
     * Сохраняем данные в админку
     *
     * @param int $iblockId
     * @return integer|bool
     */
    protected function saveFormData(int $iblockId)
    {
        $el = new \CIBlockElement();
        $this->data = [
            'IBLOCK_ID' => $iblockId,
            'NAME' => 'Новая заявка от ' . date('d.m.Y H:i:s'),
            'PROPERTY_VALUES' => $this->fields
        ];

        if ($id = $el->Add($this->data)) {
            return $id;
        }

        return false;
    }

    /**
     * Проверяем форму
     *
     * @return bool
     */
    protected function validateForm(): bool
    {
        if (!empty($this->arParams['FIELDS'])) {
            if (!bitrix_sessid()) {
                $this->errors['form'] = Loc::getMessage('FORM_ERROR');
            }

            foreach ($this->arParams['FIELDS'] as $key => $value) {
                
                if ($key !== "ITEMS") {
                    $val = filter_input(INPUT_POST, $key, ('EMAIL' !== $value['TYPE']) ? FILTER_SANITIZE_STRING : FILTER_VALIDATE_EMAIL);
                }
                else{
                    $val=$_POST['ITEMS'];
                }            
                if ($value['TYPE'] == 'TEL') {
                    $phoneVal = str_replace('_', '', $val);
                    $phoneVal = str_replace(' ', '', $phoneVal);
                    if (mb_strlen($phoneVal) < 14) {
                        $this->errors[strtolower($key)] = Loc::getMessage($key . '_ERROR');
                    }
                    $this->fields[$key] = $val;
                } elseif ($value['TYPE'] == 'FILE') {
                    foreach ($_FILES['files']['name'] as $index => $file) {
                        $arrFile = [
                            'name' => sha1($_FILES['files']['tmp_name'][$index]) . '.' . pathinfo($file, PATHINFO_EXTENSION),
                            'size' => $_FILES['files']['size'][$index],
                            'tmp_name' => $_FILES['files']['tmp_name'][$index],
                            'type' => $_FILES['files']['type'][$index],
                            'MODULE_ID' => ''
                        ];

                        $fid = \CFile::SaveFile($arrFile, '/spares/');
                        $this->fields['PHOTO'][] = \CFile::MakeFileArray($fid);
                    }

                } elseif (empty($val) && !is_array($val)) {
                    $this->errors[strtolower($key)] = Loc::getMessage($key . '_ERROR');
                } else {
                    if ('MESSAGE' === $key) {
                        $this->fields[$key] = [
                            'VALUE' => [
                                'TYPE' => 'TEXT',
                                'TEXT' => $val,
                            ]
                        ];
                    } else {
                        $this->fields[$key] = $val;
                    }
                }
            }
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    /**
     * Стартуем компонент
     *
     * @return mixed|void
     */
    public function executeComponent()
    {
        global $APPLICATION;

        try {
            \Bitrix\Main\Loader::includeModule('iblock');
        } catch (\Bitrix\Main\LoaderException $e) {
            echo $e->getMessage();
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $APPLICATION->RestartBuffer();
            $this->actionSend();
            header('Content-Type: application/json');
            echo json_encode($this->response);
            $APPLICATION->FinalActions();
            die;
        } else {
            $this->includeComponentTemplate();
            \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_DEFAULT_TEMPLATE_PATH . '/assets/js/sweetalert2.all.min.js');
            \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/sweetalert2.min.css');
            \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_DEFAULT_TEMPLATE_PATH . '/assets/css/sweetalert-custom.css');
        }
    }
}
