<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\SystemException;

class WFCurrencyComponent extends \CBitrixComponent
{

    protected $requiredModules = ["iblock"];
    
    protected function isAjax() {
        return isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == 'y';
    }

    protected function checkModules() {
        foreach ($this->requiredModules as $moduleName) {
            if (!Loader::includeModule($moduleName)) {
                throw new SystemException(Loc::getMessage('COMPONENT_CHANGE_NO_MODULE', ['#MODULE#',
                                                                                         $moduleName]));
            }
        }

        return $this;
    }

    /**
     * Event called from includeComponent before component execution.
     * Takes component parameters as argument and should return it formatted as needed.
     *
     * @param  array [string]mixed $arParams
     *
     * @return array[string]mixed
     */
    public function onPrepareComponentParams($params) {

        $request = Application::getInstance()->getContext()->getRequest();    
        return $params;
    }

    /**
     * Event called from includeComponent before component execution.
     * Includes component.php from within lang directory of the component.
     *
     * @return void
     */
    public function onIncludeComponentLang() {
        $this->includeComponentLang(basename(__FILE__));
        Loc::loadMessages(__FILE__);
    }

    protected function getAllOborud()
    {
        //все разделы оборудования
        $arFilter = array('IBLOCK_ID' => getIblockIdByCode("config-oborud"),"ACTIVE"=>"Y"); 
        $rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter);
        while ($arSect = $rsSect->Fetch()) {
            $this->arResult['ALL_OBORUD_SEC'][$arSect['ID']]['SECTION']=$arSect;
        }  
        //все элементы оборудования
        $arSelect = [
            "ID", 
            "NAME",
            "PREVIEW_PICTURE",
            "DETAIL_TEXT",
            "PREVIEW_TEXT",
            "IBLOCK_SECTION_ID",
            "PROPERTY_EXCEPT"
        ];
        $arFilter = Array("IBLOCK_ID"=>getIblockIdByCode("config-oborud"), "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while($ob = $res->Fetch()) {
            $this->arResult['ALL_OBORUD_SEC'][$ob['IBLOCK_SECTION_ID']]["ELS"][]=$ob;
            $ob['SECTION']=$this->arResult['ALL_OBORUD_SEC'][$ob['IBLOCK_SECTION_ID']]['SECTION']['NAME'];
            $ob['IMAGE']=resizeImage($ob['PREVIEW_PICTURE'],77,77);
            $this->arResult['ALL_ELS'][$ob['ID']]=$ob;
            $this->arResult['EXCEPT_ELS'][$ob['ID']]=$ob['PROPERTY_EXCEPT_VALUE'];
        }
       
              
    }

    protected function prepareResult() {   
        global $APPLICATION;
        if ($_REQUEST['ELEMENT_CODE']) {
            $arSelect = [
                "ID", 
                "NAME",
                "PREVIEW_PICTURE",
                "PREVIEW_TEXT",
                "DETAIL_TEXT",
                "PROPERTY_GRUZOPOD",
                "PROPERTY_POWER",
                "PROPERTY_VOLUME",
                "PROPERTY_PESOK",
                "PROPERTY_OBORUD",
                "PROPERTY_DEFAULT_OBORUD"               
            ];
            $arFilter = Array("IBLOCK_ID"=>getIblockIdByCode("config-technika"), "ACTIVE"=>"Y", "CODE"=>$_REQUEST['ELEMENT_CODE']);
            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
            if($ob = $res->Fetch()) {
                $APPLICATION->SetTitle($ob['NAME']);
                $this->arResult['ELEMENT']=$ob;
            }
            else{
                CHTTP::SetStatus("404 Not Found");
                @define("ERROR_404","Y");
            }
            $this->getAllOborud();
        }
        return $this;
    }

    public function executeComponent() {

        global $APPLICATION;
        
        try {
            $this->checkModules()->prepareResult();     
            $this->includeComponentTemplate();
        } catch (SystemException $e) {

           
            self::__showError($e->getMessage());
        }
    }
}