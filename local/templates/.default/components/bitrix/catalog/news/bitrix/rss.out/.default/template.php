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
$this->setFrameMode(false);
?>
<?='<?xml version="1.0" encoding="'.SITE_CHARSET.'"?>'?>
<rss version="2.0"<?if($arParams["YANDEX"]) echo ' xmlns="http://backend.userland.com/rss2" xmlns:yandex="http://news.yandex.ru"';?>>
<channel>
<title><?=$arResult["NAME"].(strlen($arResult["SECTION"]["NAME"])>0?" / ".$arResult["SECTION"]["NAME"]:"")?></title>
<link><?="http://".$arResult["SERVER_NAME"]?></link>
<description><?=strlen($arResult["SECTION"]["DESCRIPTION"])>0?$arResult["SECTION"]["DESCRIPTION"]:$arResult["DESCRIPTION"]?></description>
<lastBuildDate><?=date("r")?></lastBuildDate>
<ttl><?=$arResult["RSS_TTL"]?></ttl>
<?if(is_array($arResult["PICTURE"])):?>
	<?$image = substr($arResult["PICTURE"]["SRC"], 0, 1) == "/"? "http://".$arResult["SERVER_NAME"].$arResult["PICTURE"]["SRC"]: $arResult["PICTURE"]["SRC"];?>
	<?if($arParams["YANDEX"]):?>
		<yandex:logo><?=$image?></yandex:logo>
		<?
		$squareSize = min($arResult["PICTURE"]["WIDTH"], $arResult["PICTURE"]["HEIGHT"]);
		if ($squareSize > 0)
		{
			$squarePicture = CFile::ResizeImageGet(
				$arResult["PICTURE"],
				array("width" => $squareSize, "height" => $squareSize),
				BX_RESIZE_IMAGE_EXACT
			);
			if ($squarePicture)
			{
				$squareImage = substr($squarePicture["src"], 0, 1) == "/"? "http://".$arResult["SERVER_NAME"].$squarePicture["src"]: $squarePicture["src"];
				?><yandex:logo type="square"><?=$squareImage?></yandex:logo><?
			}
		}
		?>
	<?else:?>
		
		<image>
			<title><?=$arResult["NAME"]?></title>
			<url><?=$image?></url>
			<link><?="http://".$arResult["SERVER_NAME"]?></link>
			<width><?=$arResult["PICTURE"]["WIDTH"]?></width>
			<height><?=$arResult["PICTURE"]["HEIGHT"]?></height>
		</image>
	<?endif?>
<?endif?>
<!--    --><?//print_r($arResult);?>
<?foreach($arResult["ITEMS"] as $arItem):?>

<item turbo="true">
    <link><?=$arItem["link"]?></link>
    <title><?=$arItem["title"]?></title>
    <?$item = str_replace('<br>','',$arItem["ELEMENT"]['~DETAIL_TEXT']);?>
    <?$item_new = preg_replace('(<img.*?>)','',$item);?>
    <?$item_new2 = preg_replace('(&nbsp;)',' ',$item_new);?>
    <?$item_new3 = preg_replace('(<colgroup><col><col></colgroup>)','',$item_new2);?>
    <?$item_new4 = preg_replace('(&post)','&amp;post',$item_new3);?>
    <?$item_new5 = preg_replace('(&cc_key)','&amp;cc_key',$item_new4);?>
    <description><?=$item_new5?></description>
    <turbo:content>
        <![CDATA[
        <?if(is_array($arItem["enclosure"])):?>
            <enclosure url="<?=$arItem["enclosure"]["url"]?>" length="<?=$arItem["enclosure"]["length"]?>" type="<?=$arItem["enclosure"]["type"]?>"/>
        <?endif?>
        <?if($arItem["category"]):?>
            <category><?=$arItem["category"]?></category>
        <?endif?>
        <?if($arParams["YANDEX"]):?>
            <yandex:full-text><?=$arItem["full-text"]?></yandex:full-text>
        <?endif?>
        <pubDate><?=$arItem["pubDate"]?></pubDate>
        ]]>
    </turbo:content>
</item>
<?endforeach?>
</channel>
</rss>
