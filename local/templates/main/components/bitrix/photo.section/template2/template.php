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

<div id="gallery" class="content">
	<div class="slideshow-container">
		<div id="loading" class="loader"></div>
		<div id="slideshow" class="slideshow"></div>
	</div>
</div>
<div id="thumbs" class="navigation">
	<?if (!empty($arResult)):?>
	<ul class="thumbs noscript">
		<?foreach($arResult['ROWS']['0'] as $key => $arItem):?>
		<li>
			<a class="thumb" name="<?=$arItem["NAME"];?>" href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"];?>">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>" />
			</a>
		</li>
		<?endforeach;?>
	</ul>
	<?endif?>

</div>
</div>