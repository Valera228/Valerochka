<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <!--
    Template 2051 Spot Light
    http://www.tooplate.com/view/2051-spot-light
    -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/tooplate_style.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/galleriffic-2.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/basic.css", true);?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.3.2.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.galleriffic.js", true);?>

	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.opacityrollover.js", true);?>

    <!-- We only want the thunbnails to display when javascript is disabled -->
	<script type="text/javascript">
		document.write('<style>.noscript { display: none; }</style>');
	</script>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="home">
<div id="tooplate_wrapper">
    <div id="tooplate_header">
        <div id="tooplate_menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "template1", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
        </div> <!-- end of tooplate_menu -->


        <div id="site_title">
			<h1><a href="#"><?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"));?>
                        <?if(!CSite::InDir('/')):?></a><?endif;?></a></h1>
		</div>

        <div id="tooplate_slider">

            <!-- Start Advanced Gallery Html Containers -->
					<?$APPLICATION->IncludeComponent("bitrix:photo.section", "template2", Array(
						"COMPONENT_TEMPLATE" => ".default",
						"IBLOCK_TYPE" => "photos",	// Тип инфоблока
						"IBLOCK_ID" => "32",	// Инфоблок
						"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
						"SECTION_CODE" => "",	// Код раздела
						"SECTION_USER_FIELDS" => array(	// Свойства раздела
							0 => "",
							1 => "",
						),
						"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
						"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
						"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
						"FIELD_CODE" => array(	// Поля
							0 => "ID",
							1 => "NAME",
							2 => "SORT",
							3 => "PREVIEW_PICTURE",
							4 => "",
						),
						"PROPERTY_CODE" => array(	// Свойства
							0 => "URL",
							1 => "",
							2 => "",
						),
						"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
						"LINE_ELEMENT_COUNT" => "5",	// Количество фотографий, выводимых в одной строке таблицы
						"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
						"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
						"AJAX_MODE" => "N",	// Включить режим AJAX
						"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
						"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
						"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						"CACHE_TYPE" => "A",	// Тип кеширования
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "Y",	// Учитывать права доступа
						"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
						"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
						"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
						"SET_TITLE" => "N",	// Устанавливать заголовок страницы
						"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
						"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
						"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
						"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
						"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
						"PAGER_TITLE" => "Фотографии",	// Название категорий
						"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
						"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					),
						false
					);?>
		</div>
	</div>
</div>
<!-- end of header -->
    <div id="tooplate_main">