<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>&nbsp;


    <main class="content catalog-page">
        <div class="container">

            <!--            BREADCRUMBS-->
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", array(
                "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
            ),
                false
            ); ?>
            <!--           /BREADCRUMBS-->


            <h1>Головные уборы</h1>
            <p data-block='0' class="catalog-page__text">Шапочки, кепки и шляпы Lassie® защищают круглый год. Выбирайте
                подходящий головной убор: шляпку с полями или кепку с козырьком на лето, тоненькую шапочку без подкладки
                на осень или весну, и шапку с подкладкой из флиса или джерси на зиму. Многие наши
                шапочки имеют специальные ветронепроницаемые вставки в области ушей для дополнительной защиты. Для самых
                маленьких лучшим выбором во время метели и снежной бури станут наши ветрозащитные зимние шапки или шапки
                из искусственного меха.</p>
            <div class="catalog catalog-page__catalog">
                <form method="post" action="" data-block='1' class="catalog-page__filter catalog__filter form">

                    <!--                    FILTER-->
                    <? $APPLICATION->ShowViewContent('lassieSearchFilter'); ?>
                    <!--            <fieldset class="form__fieldset">-->
                    <!--                <legend class="form__title form__title_align_center">Фильтр</legend>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Сезон</label>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-season-1" name="Filter[season]" type="checkbox" value="winter"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-season-1" class="checkbox__label form__label">Зима</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-season-2" name="Filter[season]" type="checkbox" value="off-season"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-season-2" class="checkbox__label form__label">Межсезонье</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Коллекция</label>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-collection-1" name="Filter[collection]" type="checkbox"-->
                    <!--                               value="newborn" disabled class="checkbox__elem">-->
                    <!--                        <label for="filter-collection-1" class="checkbox__label form__label">Newborn</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-collection-2" name="Filter[collection]" type="checkbox" value="active"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-collection-2" class="checkbox__label form__label">Active</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-collection-3" name="Filter[collection]" type="checkbox" value="urban"-->
                    <!--                               disabled class="checkbox__elem">-->
                    <!--                        <label for="filter-collection-3" class="checkbox__label form__label">Urban</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-collection-4" name="Filter[collection]" type="checkbox"-->
                    <!--                               value="lassie by reima" disabled class="checkbox__elem">-->
                    <!--                        <label for="filter-collection-4" class="checkbox__label form__label">Lassie by-->
                    <!--                            Reima</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Цвет</label>-->
                    <!--                    <div class="form__content-group">-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-1" name="Filter[color]" type="checkbox" value="green"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-1"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_green checkbox-tile__label_type_color">Зеленый</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-2" name="Filter[color]" type="checkbox" value="pink"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-2"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_pink checkbox-tile__label_type_color">Розовый</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-3" name="Filter[color]" type="checkbox" value="orange"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-3"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_orange checkbox-tile__label_type_color">Оранжевый</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-4" name="Filter[color]" type="checkbox" value="dark blue"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-4"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_dark-blue checkbox-tile__label_type_color">Темно-синий</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-5" name="Filter[color]" type="checkbox" value="light green"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-5"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_light-green checkbox-tile__label_type_color">Салатовый</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-6" name="Filter[color]" type="checkbox" value="sand"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-6"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_sand checkbox-tile__label_type_color">Песочный</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-7" name="Filter[color]" type="checkbox" value="red"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-7"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_red checkbox-tile__label_type_color">Тёмно-красный</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-8" name="Filter[color]" type="checkbox" value="lilac"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-8"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_lilac checkbox-tile__label_type_color">Сиреневый</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-color-9" name="Filter[color]" type="checkbox" value="blue"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-color-9"-->
                    <!--                                   class="checkbox-tile__label checkbox-tile__label_color_blue checkbox-tile__label_type_color">Голубой</label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Пол</label>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-gender-1" name="Filter[gender]" type="checkbox" value="male"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-gender-1" class="checkbox__label form__label">Мальчик</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-gender-2" name="Filter[gender]" type="checkbox" value="female"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-gender-2" class="checkbox__label form__label">Девочка</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-gender-3" name="Filter[gender]" type="checkbox" value="unisex"-->
                    <!--                               class="checkbox__elem">-->
                    <!--                        <label for="filter-gender-3" class="checkbox__label form__label">Унисекс</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Размер</label>-->
                    <!--                    <div class="form__content-group">-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-1" name="Filter[size]" type="checkbox" value="50"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-1" class="checkbox-tile__label">50</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-2" name="Filter[size]" type="checkbox" value="56"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-2" class="checkbox-tile__label">56</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-3" name="Filter[size]" type="checkbox" value="62"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-3" class="checkbox-tile__label">62</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-4" name="Filter[size]" type="checkbox" value="68"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-4" class="checkbox-tile__label">68</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-5" name="Filter[size]" type="checkbox" value="74"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-5" class="checkbox-tile__label">74</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-6" name="Filter[size]" type="checkbox" value="80"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-6" class="checkbox-tile__label">80</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-7" name="Filter[size]" type="checkbox" value="86"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-7" class="checkbox-tile__label">86</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-8" name="Filter[size]" type="checkbox" value="92"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-8" class="checkbox-tile__label">92</label>-->
                    <!--                        </div>-->
                    <!--                        <div class="checkbox-tile checkbox-tile_size_big">-->
                    <!--                            <input id="filter-size-9" name="Filter[size]" type="checkbox" value="98"-->
                    <!--                                   class="checkbox-tile__elem">-->
                    <!--                            <label for="filter-size-9" class="checkbox-tile__label">98</label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Наличие</label>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-availability-1" name="Filter[availability]" type="checkbox"-->
                    <!--                               value="available" class="checkbox__elem">-->
                    <!--                        <label for="filter-availability-1" class="checkbox__label form__label">В наличии</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="checkbox">-->
                    <!--                        <input id="filter-availability-2" name="Filter[availability]" type="checkbox"-->
                    <!--                               value="order" class="checkbox__elem">-->
                    <!--                        <label for="filter-availability-2" class="checkbox__label form__label">Под заказ</label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <div class="form__row form__row_direction_column">-->
                    <!--                    <label class="form__label">Цена, руб.</label>-->
                    <!--                    <div class="range-slider">-->
                    <!--                        <input class="range-slider__elem" type="text">-->
                    <!--                        <div class="range-slider__output-row">-->
                    <!--                            <input name="Filter[price-min]" data-type="min" readonly-->
                    <!--                                   class="input range-slider__output" type="text">-->
                    <!--                            <input name="Filter[price-max]" data-type="max" readonly-->
                    <!--                                   class="input range-slider__output" type="text">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <button type="submit" class="btn">Показать товары</button>-->
                    <!--            </fieldset>-->

                    <!--                    /FILTER-->
                </form>

                <!-- catalog__filter end -->


                <!--                CATALOG-->
                <div class="catalog__main">
                    <? $APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"simple", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/cart",
		"BIG_DATA_RCM_TYPE" => "personal",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "5",
		"LINK_IBLOCK_TYPE" => "catalog",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "Добавить в корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_BIG_DATA" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "Y",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "Y",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "simple",
		"SEF_FOLDER" => "/catalog/",
		"FILTER_NAME" => "myFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "COLLECTION",
			1 => "AVAILABLE",
			2 => "SEX",
			3 => "SIZE",
			4 => "SEASON",
			5 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "QUANTITY",
			1 => "SIZE",
			2 => "",
		),
		"USE_ALSO_BUY" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
); ?>

                </div>
                <!--               /CATALOG-->

            </div>
        </div>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>