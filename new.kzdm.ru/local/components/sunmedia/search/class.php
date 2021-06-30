<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class SearchComponent
 */
class SearchComponent extends \CBitrixComponent
{
    protected $response = [
        'success' => false,
    ];
    protected $result = [];

    /**
     * Ищем всякое
     */
    protected function actionSearch(): void
    {
        $request = \Bitrix\Main\Context::getCurrent()->getRequest();
        $query = $request->get('q');
        $search = new CSearch();
        $search->SetOptions([
            'ERROR_ON_EMPTY_STEM' => false,
        ]);
        $search->Search([
            'QUERY' => $query,
            'SITE_ID' => $this->arParams['SITE_ID'],
            'MODULE_ID' => $this->arParams['MODULE_ID'],
            'CHECK_DATES' => $this->arParams['CHECK_DATES'],
            'PARAM2' => $this->arParams['SEARCH_PARAM']
        ]);

        if (!$search->SelectedRowsCount()){
            $search->Search([
                'QUERY' => $query,
                'SITE_ID' => $this->arParams['SITE_ID'],
                'MODULE_ID' => $this->arParams['MODULE_ID'],
                'CHECK_DATES' => $this->arParams['CHECK_DATES'],
            ], [], ['STEMMING' => false]);
        }

        if ($search->errorno === 0) {
            while ($result = $search->Fetch()) {
                $this->result[] = [
                    'title' => $result['TITLE'],
                    'url' => str_replace('index.php', '', $result['URL'])
                ];
            }

            $this->response['result'] = $this->result;
            $this->response['success'] = true;
            $this->response['result_count'] = count($this->result);
        }
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
            \Bitrix\Main\Loader::includeModule('search');
        } catch (\Bitrix\Main\LoaderException $e) {
            echo $e->getMessage();
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $APPLICATION->RestartBuffer();
            $this->actionSearch();
            header('Content-Type: application/json');
            echo json_encode($this->response);
            $APPLICATION->FinalActions();
            die;
        } else {
            $this->includeComponentTemplate();
        }
    }
}
