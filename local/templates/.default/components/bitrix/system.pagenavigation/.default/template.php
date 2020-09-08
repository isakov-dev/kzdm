<?php

$ClientID = 'navigation_' . $arResult['NavNum'];

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        return;
    }
}
?>
<div class="pagination">
    <div class="pagination__items">
    <?php
    $strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
    $strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
    if ($arResult["bDescPageNumbering"] === true) {
    // to show always first and last pages
    $arResult["nStartPage"] = $arResult["NavPageCount"];
    $arResult["nEndPage"] = 1;

    $sPrevHref = '';
    if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
        $bPrevDisabled = false;
        if ($arResult["bSavePage"]) {
            $sPrevHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
        } else {
            if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"] + 1)) {
                $sPrevHref = $arResult["sUrlPath"] . $strNavQueryStringFull;
            } else {
                $sPrevHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
            }
        }
    } else {
        $bPrevDisabled = true;
    }

    $sNextHref = '';
    if ($arResult["NavPageNomer"] > 1) {
        $bNextDisabled = false;
        $sNextHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1);
    } else {
        $bNextDisabled = true;
    }
    ?>
    <?php if ($bPrevDisabled): ?>
        <div class="pagination__link title title_blue">предыдущая страница</div>
    <?php else: ?>
        <a class="pagination__link title title_blue" href="<?= $sPrevHref; ?>">предыдущая страница</a>
    <?php endif; ?>
    <div class="pagination__items">
        <?
        $bFirst = true;
        $bPoints = false;
        do {
            $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;
            if ($arResult["nStartPage"] <= 2 || $arResult["NavPageCount"] - $arResult["nStartPage"] <= 1 || abs($arResult['nStartPage'] - $arResult["NavPageNomer"]) <= 2) {

                if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                    ?>
                    <div class="pagination__item active"><?= $NavRecordGroupPrint ?></div>
                <?
                elseif ($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
                    ?>
                    <a class="pagination__item" href="<?= $arResult["sUrlPath"]; ?><?= $strNavQueryStringFull; ?>"><?= $NavRecordGroupPrint; ?></a>
                <?
                else:
                    ?>
                    <a class="pagination__item" href="<?= $arResult["sUrlPath"]; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult["NavNum"]; ?>=<?= $arResult["nStartPage"]; ?>"><?= $NavRecordGroupPrint; ?></a>
                <?
                endif;
                $bFirst = false;
                $bPoints = true;
            } else {
                if ($bPoints) {
                    ?>
                    <div class="pagination__sep">...</div><?
                    $bPoints = false;
                }
            }
            $arResult["nStartPage"]--;
        } while ($arResult["nStartPage"] >= $arResult["nEndPage"]);
        } else {
        // to show always first and last pages
        $arResult["nStartPage"] = 1;
        $arResult["nEndPage"] = $arResult["NavPageCount"];

        $sPrevHref = '';
        if ($arResult["NavPageNomer"] > 1) {
            $bPrevDisabled = false;

            if ($arResult["bSavePage"] || $arResult["NavPageNomer"] > 2) {
                $sPrevHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] - 1);
            } else {
                $sPrevHref = $arResult["sUrlPath"] . $strNavQueryStringFull;
            }
        } else {
            $bPrevDisabled = true;
        }

        $sNextHref = '';
        if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
            $bNextDisabled = false;
            $sNextHref = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
        } else {
            $bNextDisabled = true;
        }
        ?>
    <?php if ($bPrevDisabled): ?>
        <div class="pagination__link title title_blue">предыдущая страница</div>
    <?php else: ?>
        <a class="pagination__link title title_blue" href="<?= $sPrevHref; ?>">предыдущая страница</a>
    <?php endif; ?>
        <div class="pagination__items">
            <?
            $bFirst = true;
            $bPoints = false;
            do {
                if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"] - $arResult["nStartPage"] <= 1 || abs($arResult['nStartPage'] - $arResult["NavPageNomer"]) <= 2) {

                    if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                        ?>
                        <div class="pagination__item active"><?= $arResult["nStartPage"]; ?></div>
                    <?
                    elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                        ?>
                        <a class="pagination__item" href="<?= $arResult["sUrlPath"]; ?><?= $strNavQueryStringFull; ?>"><?= $arResult["nStartPage"]; ?></a>
                    <?
                    else:
                        ?>
                        <a class="pagination__item" href="<?= $arResult["sUrlPath"]; ?>?<?= $strNavQueryString; ?>PAGEN_<?= $arResult["NavNum"]; ?>=<?= $arResult["nStartPage"]; ?>"><?= $arResult["nStartPage"]; ?></a>
                    <?
                    endif;
                    $bFirst = false;
                    $bPoints = true;
                } else {
                    if ($bPoints) {
                        ?>
                        <div class="pagination__sep">...</div><?
                        $bPoints = false;
                    }
                }
                $arResult["nStartPage"]++;
            } while ($arResult["nStartPage"] <= $arResult["nEndPage"]);
            }
            ?>
        </div>
        <?php if ($bNextDisabled): ?>
            <div class="pagination__link title title_blue">следующая страница</div>
        <?php else: ?>
            <a class="pagination__link title title_blue" href="<?= $sNextHref; ?>">следующая страница</a>
        <?php endif; ?>
    </div>
</div>