<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetTitle("LASSIE-главная");
?>
    <!--            Слайдер-->
    <main class="content index">
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "str1",
			2 => "str2",
			3 => "str3",
			4 => "str4",
			5 => " ",
			6 => " ",
			7 => " ",
			8 => " ",
			9 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_slider"
	),
	false
); ?>
    <!--            /Слайдер-->


<!--Популярные товары-->
    <section class="popular">
    <div class="container">
    <h1 class="heading"><span class="heading__text">Популярные товары</span></h1>

    <?$APPLICATION->IncludeComponent("bitrix:sale.bestsellers", "template1", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADDITIONAL_PICT_PROP_5" => "",	// Дополнительная картинка
		"ADDITIONAL_PICT_PROP_6" => "",	// Дополнительная картинка
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"BY" => "AMOUNT",	// Сортировать отобранные товары по
		"CACHE_TIME" => "86400",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CART_PROPERTIES_5" => array(	// Свойства для добавления в корзину
			0 => "COLLECTION",
			1 => "AVAILABLE",
			2 => "COLLECTION,AVAILABLE,",
			3 => "",
		),
		"CART_PROPERTIES_6" => array(	// Свойства для добавления в корзину
			0 => "",
			1 => "",
		),
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"FILTER" => "",	// Фильтр по статусам заказа
		"HIDE_NOT_AVAILABLE" => "N",	// Не отображать недоступные товары
		"LABEL_PROP_5" => "-",	// Свойство меток товара
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"OFFER_TREE_PROPS_6" => "",	// Свойства для группировки
		"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить частично заполненные свойства
		"PERIOD" => "0",	// Период выборки (дней)
		"PRICE_CODE" => array(	// Тип цены
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
		"PROPERTY_CODE_5" => array(	// Свойства для отображения
			0 => "COLLECTION",
			1 => "AVAILABLE",
			2 => "COLLECTION,AVAILABLE,SEX,SIZE,SEASON,",
			3 => "",
		),
		"PROPERTY_CODE_6" => array(	// Свойства для отображения
			0 => "QUANTITY",
			1 => "SIZE",
			2 => "",
		),
		"SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
		"SHOW_IMAGE" => "Y",	// Показывать изображение
		"SHOW_NAME" => "Y",	// Показывать название
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_PRODUCTS_5" => "Y",	// Показывать товары каталога
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<!--/Популярные товары-->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>