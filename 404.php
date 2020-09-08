<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
$APPLICATION->SetTitle("Страница не найдена");
global $USER;
$APPLICATION->SetPageProperty('error-404', 'error-404');
?>
<?php if (SITE_ID == 's1'): ?>
    <div class="single">
        <div class="page-404">
            <div class="wrapper wrapper_default">
                <h1 class="page-404__title title title_blue">Ошибка 404.</h1>
                <div class="page-404__desc">
                    <p>
                        Страница не найдена, ошибка 404. Возможно такой страницы не существует. Вы можете вернуться на <a href="<?= SITE_DIR; ?>" class="title title_blue page-404__link">главную</a> или <a href="<?= SITE_DIR; ?>catalog/" class="title title_blue page-404__link">посмотреть спецтехнику</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="single">
        <div class="page-404">
            <div class="wrapper wrapper_default">
                <h1 class="page-404__title title title_blue">Error 404.</h1>
                <div class="page-404__desc">
                    <p>
                        Page not found, error 404. Perhaps such a page does not exist. You can return to the <a href="<?= SITE_DIR; ?>" class="title title_blue page-404__link">main page</a> or <a href="<?= SITE_DIR; ?>catalog/" class="title title_blue page-404__link">see special equipment.</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
