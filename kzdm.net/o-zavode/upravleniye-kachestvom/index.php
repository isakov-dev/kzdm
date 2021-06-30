<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Quality control');
$APPLICATION->SetPageProperty('title', 'Quality control');
?>
<div class="single">
    <div class="single-header single-header_gray">
        <div class="single-header__content">
            <div class="wrapper wrapper_default">
                <h1 class="h1 single__title"><?php $APPLICATION->ShowTitle(); ?></h1>
                <div class="single__desc">
                    <p>
                        To ensure the smooth operation of our customers' special equipment, it carries out
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "inner",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "about",
            "USE_EXT" => "N"
        )
    );?>
    <div class="section section_default section_animated wow">
        <div class="wrapper wrapper_default">
            <div class="row">
                <div class="col col--xl-8 col--xl-offset-2">
                    <div class="paragraph">
                        <p>
                            The purpose of product quality analysis is to assess its compliance with the specified requirements, to determine the root causes of nonconformities for the development of measures to eliminate nonconformities, the causes of their occurrence and to exclude their recurrence.
                        </p>
                        <h3 class="h3 title title_middle-offset">
                            The subdivisions of JSC "Kurgandormash" carry out the following types of product quality analysis
                        </h3>
                        <div class="box box_offset">
                            <h4 class="h4 title title_middle-offset">Workshops are analyzing:</h4>
                            <ul>
                                <li>
                                    product quality based on the results of technical control and testing;
                                </li>
                                <li>
                                    the quality of products in operation according to consumer claims, PDKK protocols, technical examination acts;
                                </li>
                                <li>
                                    losses from rejects, as well as costs associated with non-conformities of CD products, admitted to production according to deviation cards;
                                </li>
                                <li>
                                    implementation and effectiveness of corrective and preventive measures.
                                </li>
                            </ul>
                        </div>
                        <div class="box box_offset">
                            <h4 class="h4 title title_middle-offset">
                                In the Quality Control Department, the analysis is:
                            </h4>
                            <ul>
                                <li>
                                    product quality at the stage of production, conservation and storage;
                                </li>
                                <li>
                                    losses from marriage;
                                </li>
                                <li>
                                    main defects and the general level of defectiveness of products during operation;
                                </li>
                                <li>
                                    the implementation and effectiveness of corrective and preventive;
                                </li>
                                <li>
                                    activities;
                                </li>
                                <li>
                                    quality of components, raw materials and materials;
                                </li>
                                <li>
                                    deviation maps.
                                </li>
                            </ul>
                        </div>
                        <div class="box box_offset">
                            <h4 class="h4 title title_middle-offset">
                                Analysis
                            </h4>
                            <ul>
                                <li>
                                    Analysis of inconsistencies identified at the stage of production, testing, preservation and storage of products.
                                </li>
                                <li>
                                    The collection of information for the analysis is carried out by the head of the quality control department of JSC "Kurgandormash"
                                </li>
                                <li>
                                    A systematic analysis of data on non-conforming products is carried out by a shop technologist under the guidance of the shop manager, with the participation of the head of the QCD department of Kurgandormash JSC with the involvement, if necessary, of specialists from other departments.
                                </li>
                            </ul>
                        </div>
                        <div class="box box_offset">
                            <h4 class="h4 title title_middle-offset">
                                The analysis considers:
                            </h4>
                            <ul>
                                <li>
                                    the reasons for the inconsistency and the effectiveness of previously taken measures;
                                </li>
                                <li>
                                    quantitative indicators (number of cases, parts of nonconforming products, and recurrence of defects);
                                </li>
                                <li>
                                    losses from defects (costs of non-conformities) and the degree of compensation for losses from non-conformities;
                                </li>
                                <li>number of cases of admission of non-conforming products into production using presentation cards.</li>
                            </ul>
                        </div>
                        <div class="box box_offset">
                            <h4 class="h4 title title_middle-offset">
                                Based on the results obtained, areas of activity are determined
                            </h4>
                            <ul>
                                <li>
                                    elimination of inconsistencies and (or) their reasons (main reasons associated with mass marriage, high costs);
                                </li>
                                <li>
                                    development of measures for damaged parts (nodes);
                                </li>
                                <li>
                                    elimination of critical operating defects.
                                </li>
                                <li>Responsible for the analysis are heads of production joint ventures.</li>
                            </ul>
                        </div>
                        <div class="box box_offset">
                            <div class="row">
                                <div class="col col--lg-8">
                                    <h4 class="h4 title title_middle-offset">
                                        Analysis based on the results of product operation
                                    </h4>
                                    <div class="paragraph">
                                        <p>
                                            The objectives of the analysis are: determination of the quality level of products based on the results of consumer assessment (the number of comments and complaints, data on discrepancies from the service group), reduction of costs both during production and during warranty repair of products.
Object of analysis: defects, failures of products during their operation at the consumer.
Purpose of the analysis: determining the causes of nonconformities to eliminate them by reworking products or taking measures in production.
                                        </p>
                                        <p>
                                            Based on the results of the analysis of inconsistencies identified during the maintenance and repair of products, remarks and claims during the operation of products, the head of the warranty and service department submits to the Quality Control Department a certificate in the form in accordance with STO (ISO 7.2) 025 by the fifth day of the month following the quarter for analysis.
Product quality reporting.
 Based on the results of the analysis of the incoming quality control of components, raw materials and materials, product control in the process of production and operation of the products, the head of the quality control department prepares a report on a quarterly basis.
The report is approved by the PDGC and submitted to the General Director.
                                        </p>
                                    </div>
                                </div>
                                <div class="col col--lg-3">
                                    <div class="sert">
                                        <img class="sert__img" src="/upload/attached/mark.png" alt="">
                                        <p>
                                            The company is certified in the quality system ISO 9001-2015
                                        </p>
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
