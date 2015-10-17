<?php
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head profile="http://gmpg.org/xfn/11">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />


    <!-- Load Jquery -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.js", true);?>
    <!-- End Load -->

    <!-- for IE6 i'm sorry but there is too much wrong with it, needs warning at least, you can disable it by delething this load. -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.badBrowser.js", true);?>
    <!-- End Load -->

    <!-- ALL jQuery Tools. No jQuery library -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.tools.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Easing -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.css-transform.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.css-rotate-scale.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Cycle and adiacent CSS File -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.cycle.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.cycle.css", true);?>
    <!-- End Load -->

    <!-- Load Cufon and Adiacent Font Files, and apply Cufon on used Styles -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/cufon.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/Museo_400-Museo_italic_400.font.js", true);?>
    <!-- End Load -->

    <!-- Load Pretty Photo -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prettyPhoto.css", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.prettyPhoto.js", true);?>
    <script type="text/javascript">
        /* pretty photo responds on rel='prettyPhoto' */
        jQuery(document).ready(function() { $("a[rel^='prettyPhoto']").prettyPhoto();   });
    </script>
    <!-- End Load -->

    <!-- Load Superfish Drowpdown Menu, and run it -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.hoverInt.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.bgiframe.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/superfish.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Roundabout, and adiacent JS & CSS file -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.roundabout.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.roundabout-shapes-1.1.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.roundabout.css", true);?>
    <!-- End Load -->

    <!-- Load SWFObject, used for video embedding -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swfobject.js", true);?>
    <!-- End Load -->

    <!-- Load Quicksand -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.quicksand.js", true);?>
    <!-- End Load -->

    <!-- Load some small custom scripts -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/custom.js", true);?>
    <!-- End Load -->

    <!-- Load PNG Fix older IE Versions -->
    <!--[if lt IE 7]>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/pngfix.js", true);?>
    <script type="text/javascript">DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- End Load -->

    <!-- Load Main Stylesheet -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
    <!-- End Load -->

    <!-- Load Alternate Stylesheets, can be disabled if not used -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-orange.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-dirtyblue.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-redish.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-green.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-pink.css", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/styleswitch.js", true);?>
    <!-- End Load -->

    <!-- Load Main Enhancements Stylesheet border radius, transparency and such things -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style-enhance.css", true);?>
    <!-- End Load -->

    <!-- Load IE Stylesheet -->
    <!--[if IE]>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ie.css", true);?>
    <![endif]-->
    <!-- End Load -->

    <!-- Load IE6 Stylesheet -->
    <!--[if IE 6]>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ie6.css", true);?>
    <![endif]-->
    <!-- End Load -->

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<!-- start header alternate -->
<div class="header-alt">

    <div class="slide slide-roundabout bg1">
        <div class="containit ornament-right">
            <div class="roundaboutshadow">
                <div class="headimage">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/may/isaac_clarke_dead_space.png">
                </div>
                <div class="logo">
                    <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"));?>
                        <?if(!CSite::InDir('/')):?></a><?endif;?>
                </div>

                <div id="filler"><!--  --></div>
            </div>
        </div>

    </div>

</div>

<!-- start top and main menu -->
<div class="main-menu">
    <div class="ornament">
        <div class="containit">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu1", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
            <div class="menu">
                <!-- navigation start -->
                <div id="navigation">
                    <?if (!empty($arResult)):?>
                    <ul class="sf-menu">
                        <?foreach($arResult as $key => $arItem):?>
                        <?if($arItem['DEPTH_LEVEL'] != 1){
                        continue;
                            }
                            ?>
                            <?if($arItem['DEPTH_LEVEL'] == 1):?>
                        <li <?if($arItem["SELECTED"]):?>class="current"<?endif;?>>
                            <a href="<?=$arItem["LINK"];?>" class="applyfont"><?=$arItem["TEXT"];?></a>
                            <ul>
                            <?endif;?>
                                <?foreach($arResult as $keyInner => $arItemInner):?>
                                <?if($keyInner <= $key) {
                                    continue;
                                }
                                ?>
                                <?if($arItemInner['DEPTH_LEVEL'] == 2):?>
                                <li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
                                <?endif;?>
                                <?if($arItemInner['DEPTH_LEVEL'] != 2){
                                    break;
                                }
                                ?>
                                <?endforeach;?>
                            <?if($arItem['DEPTH_LEVEL'] == 1):?>
                            </ul>
                        </li>
                            <?endif;?>
                        <?endforeach;?>
                    <?endif?>
                </div>
                <!-- navigation end -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- end top and main menu -->

<!-- start main content -->
<div class="main-content pt-alt">
    <div class="containit">
