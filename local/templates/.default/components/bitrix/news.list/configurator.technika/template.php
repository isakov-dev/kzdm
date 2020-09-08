<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if ($arItem['PREVIEW_PICTURE']) {
		$src=resizeImage($arItem['PREVIEW_PICTURE']['ID'],500,500);
	}
	else{
		$src=false;
	}
	
	?>	

<a href="<?=$arItem['DETAIL_PAGE_URL']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="car__link">
	<div class="car__item">
		<?if ($src) {?>
			<div class="car__img">
				<img src="<?=$src?>" alt="<?=$arItem['NAME']?>">
			</div>
		<?}?>
		<div class="car__name"><?=$arItem['NAME']?></div>
		<div class="car__info">
			<div class="car__infoname">
			<?if ($arItem['PROPERTIES']['GRUZOPOD']['VALUE']) {?>
				<p class="car__infoname-name">Грузоподъемность</p>
			<?}?>
			<?if ($arItem['PROPERTIES']['POWER']['VALUE']) {?>
				<p class="car__infoname-name">Мощность двигателя</p>
			<?}?>
			<?if ($arItem['PROPERTIES']['PESOK']['VALUE']) {?>
				<p class="car__infoname-name">Объём бункера</p>
			<?}?>
			</div>
			<div class="car__infodata">
				<p class="car__infodata-data"><?=$arItem['PROPERTIES']['GRUZOPOD']['VALUE']?></p>
				<p class="car__infodata-data"><?=$arItem['PROPERTIES']['POWER']['VALUE']?></p>
				<p class="car__infodata-data"><?=$arItem['PROPERTIES']['PESOK']['VALUE']?></p>
			</div>
		</div>
	</div>
</a>      
<?endforeach;?>