<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<div class="social">
	<?if (!empty($arResult)):?>
<ul>
	<?foreach($arResult['ITEMS'] as $key => $arItem):?>
	<li>
		<a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"];?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>"  class="vm"/> <?=$arItem["NAME"];?> </a>
	</li>
	<?endforeach;?>
</ul>
	<?endif?>
</div>

