<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Comparison');
$APPLICATION->SetPageProperty('title', 'Comparison');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
                <div class="single__desc">
                    <p>
                        Для обеспечения бесперебойной работы специальной техники наших клиентов, осуществляет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $APPLICATION->IncludeComponent(
        "bitrix:catalog.compare.list",
        "",
        Array(
            "ACTION_VARIABLE" => "action",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "COMPARE_URL" => "/sravneniye/",
            "COMPONENT_TEMPLATE" => ".default",
            "DETAIL_URL" => "",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "catalog",
            "NAME" => "COMPARE_LIST",
            "POSITION" => "top left",
            "POSITION_FIXED" => "Y",
            "PRODUCT_ID_VARIABLE" => "id"
        )
    ); ?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="compare-widget">
                <div class=" compare__item compare-widget__aside">
                    <div class="compare__header match-height">
                        <a href="#" class="compare-more">
                            <span class="compare__content">
                                <img class="compare__reload" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/reload.svg" alt="">
                                <span class="compare-more__title title title_block">
                                    Выбрать другую спецтехнику для сравнения
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="compare__content">
                        <div class="compare-section">
                            <h3 class="compare-section__title">Основные</h3>
                            <div class="compare-lines">
                                <div class="compare-line">
                                    Вместимость бункера
                                </div>
                                <div class="compare-line">
                                    Вместимость бака для воды
                                </div>
                                <div class="compare-line">
                                    Водяной бак установлен на раме
                                </div>
                                <div class="compare-line">
                                    УроСистема контроля о низком уровне воды в баке
                                </div>
                                <div class="compare-line">
                                    Марка автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Мощность автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Тип привода рабочего оборудования
                                </div>
                                <div class="compare-line">
                                    Тип вентилятора
                                </div>
                            </div>
                        </div>
                        <div class="compare-section">
                            <h3 class="compare-section__title">Устройство всасывания смёта</h3>
                            <div class="compare-lines">
                                <div class="compare-line">
                                    Вместимость бункера
                                </div>
                                <div class="compare-line">
                                    Вместимость бака для воды
                                </div>
                                <div class="compare-line">
                                    Водяной бак установлен на раме
                                </div>
                                <div class="compare-line">
                                    УроСистема контроля о низком уровне воды в баке
                                </div>
                                <div class="compare-line">
                                    Марка автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Мощность автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Тип привода рабочего оборудования
                                </div>
                                <div class="compare-line">
                                    Тип вентилятора
                                </div>
                            </div>
                        </div>
                        <div class="compare-section">
                            <h3 class="compare-section__title">Лотковая щётка</h3>
                            <div class="compare-lines">
                                <div class="compare-line">
                                    Вместимость бункера
                                </div>
                                <div class="compare-line">
                                    Вместимость бака для воды
                                </div>
                                <div class="compare-line">
                                    Водяной бак установлен на раме
                                </div>
                                <div class="compare-line">
                                    УроСистема контроля о низком уровне воды в баке
                                </div>
                                <div class="compare-line">
                                    Марка автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Мощность автономного двигателя
                                </div>
                                <div class="compare-line">
                                    Тип привода рабочего оборудования
                                </div>
                                <div class="compare-line">
                                    Тип вентилятора
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="compared-scroll custom-scroll-x ">
                    <div class="compare-list">
                        <div class=" compare__item">
                            <div class="compare__header match-height">
                                <div class="compare__car">
                                    <button class="compare__remove"></button>
                                    <img class="compare__img" src="images/compare-img.jpg" alt="">
                                    <span class="car-article__city car-article__item title title_block title_large title_grey">
                                                Город / Трасса
                                            </span>
                                    <a href="#" class="h4 title title_block  car-article__title title_bold car-article__item">
                                        МД-651
                                    </a>
                                </div>
                            </div>
                            <div class="compare__content">
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" compare__item">
                            <div class="compare__header match-height">
                                <div class="compare__car">
                                    <button class="compare__remove"></button>
                                    <img class="compare__img" src="images/compare-img1.jpg" alt="">
                                    <span class="car-article__city car-article__item title title_block title_large title_grey">
                                                Город / Трасса
                                            </span>
                                    <a href="#" class="h4 title title_block  car-article__title title_bold car-article__item">
                                        УКМ-2500
                                    </a>
                                </div>
                            </div>
                            <div class="compare__content">
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-section">
                                    <div class="compare-lines">
                                        <div class="compare-line compare-line_gray">
                                            Не менее 7 м<sup>³</sup>
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            не менее 1 200 л
                                        </div>
                                        <div class="compare-line compare-line_gray">

                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Присутствует
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            John Deer
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            50–90 кВт
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Гидравлический
                                        </div>
                                        <div class="compare-line compare-line_gray">
                                            Центробежный
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
