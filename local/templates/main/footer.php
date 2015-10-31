<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
</div>
</div>
<!-- end main content -->

<!-- start big footer -->
<div class="big-footer">
    <div class="top-shadow-footer"><!--  --></div>
    <div class="containit">

        <div class="full-width clearfix">
            <div class="one-fourth panel">
                <div class="nopad">
                    <h4>Head menu</h4>
                    <ul>
                        <li><a href="#">Head page</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">About us</a></li>
                        <li class="last"><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">

                <div class="padleft">
                    <h4>Collection</h4>
                    <ul>
                        <li><a href="#">Films</a></li>
                        <li><a href="#">Games</a></li>
                        <li class="last"><a href="#">Musics</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">
                <div class="padleft">
                    <h4>Contacts</h4>
                    <p>Curabitur placerat, urna eu fringilla placerat, urna eu venenatis</p>

                    <b class="big">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"));?>
                    </b><br/>
                    <a href="mailto:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/mail.php"));?> ">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/mail.php"));?>
                    </a><br/>
                </div>
            </div>
            <div class="one-fourth-last panel border-vert-left newsletter">
                <div class="padleft">

                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/may/Магина.png">
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end big footer -->

<!-- start small footer -->

<div class="small-footer">

    <div class="containit">

        <div class="copy"> &copy; <?=date('Y');?> <a href="http://www.spinform.ro">Неон</a>. Все права защищены.</div>

		<?$APPLICATION->IncludeComponent("bitrix:news.list", "sosial", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "photos",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "33",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
			5 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Социальные сети",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
        <div class="clear"></div>
    </div>
</div>
<!-- end start small footer -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>