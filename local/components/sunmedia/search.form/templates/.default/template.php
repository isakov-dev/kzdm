<div style="display: none;" id="search" class="popup popup_search">
    <div class="search__row search__row_bordered">
        <div class="wrapper search_wrapper wrapper_default">
            <div class="search__small">
                <form id="form-search" action="<?= SITE_DIR; ?>search/" class="search__form" method="get">
                    <input id="search-input" type="text" class="search__input" placeholder="<?= Bitrix\Main\Localization\Loc::getMessage('SITE_SEARCH'); ?>" autocomplete="off" name="q">
                    <button class="search__submit">
                        <svg class="search__arrow iconed__ico">
                            <use xlink:href="<?= SITE_DEFAULT_TEMPLATE_PATH; ?>/assets/images/icons.svg#arrow-r-slim"></use>
                        </svg>
                    </button>
                </form>
            </div>
            <button type="button" data-fancybox-close="" class="search__close fancybox-close-small" title="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="search__small search-bottom-wrapp">
        <div id="search-menu" class="search__bottom">
            <span class="search__title title_m"><?= Bitrix\Main\Localization\Loc::getMessage('SEARCH_PLACEHOLDER'); ?>:</span>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "search",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "search",
                    "USE_EXT" => "N"
                ),
                $this->getComponent()
            ); ?>
        </div>
        <div id="search-result" class="search__bottom search-result">
            <div class="search-result_title h4 title_bold"><?= Bitrix\Main\Localization\Loc::getMessage('SEARCH_RESULT_COUNT'); ?> - <span id="search-result_count" class="search-result_count"></div>
            <div id="search-result_list" class="search-result_list"></div>
        </div>
    </div>
</div>