<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php

use Bitrix\Main\Page\Asset; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    $APPLICATION->ShowHead();
    $APPLICATION->SetTitle("LASSIE-главная");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PASS . "/assets/styles/app.min.css");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PASS . "/assets/scripts/app.min.js");
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin,cyrillic" rel="stylesheet">'); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="imagetoolbar" content="no">
    <meta name="msthemecompatible" content="no">
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="google" value="notranslate">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="application-name" content="">
    <meta name="msapplication-tooltip" content="">

    <meta name="description" content="">
    <meta name="keywords" content="">

</head>
<body>
<?php
$APPLICATION->ShowPanel();
?>
<header class="header">
    <div class="header__top">
        <div class="container header__container header__container_top">
            <div class="header__col header__col_top-left">
                <!--subscribe-->
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => INCLUDE_AREAS_PATH . "/subscribe.php"
                    ),
                    false
                ); ?>
                <!--subscribe-->
            </div>
            <div class="header__col header__col_top-right">
                <!--                <ul class="header__top-menu menu">-->
                <!--                    <li class="menu__item"><a href="javascript:void(0);" class="link menu__name">О компании</a>-->
                <!--                    </li>-->
                <!--                    <li class="menu__item"><a href="javascript:void(0);" class="link menu__name">Оплата</a>-->
                <!--                    </li>-->
                <!--                    <li class="menu__item"><a href="javascript:void(0);" class="link menu__name">Доставка</a>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_right",
                    array(
                        "ROOT_MENU_TYPE" => "top_right",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "top",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(),
                        "COMPONENT_TEMPLATE" => "top_right"
                    ),
                    false
                ); ?>

                <!--                SEARCH-->
                <? $APPLICATION->IncludeComponent("bitrix:search.title", "lassie_search",
                    array(
                        "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                        "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                        "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                        "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                        "PAGE" => "СТРАНИЦА КАТАЛОГА",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),    // Название категории
                        "CATEGORY_0" => array(    // Ограничение области поиска
                            0 => "iblock_catalog",
                        ),
                        "CATEGORY_0_iblock_catalog" => array(    // Искать в информационных блоках типа "iblock_catalog"
                            0 => "all",
                        ),
                        "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                        "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                        "INPUT_ID" => "title-search-input",    // ID строки ввода поискового запроса
                        "CONTAINER_ID" => "search",    // ID контейнера, по ширине которого будут выводиться результаты
                        "PRICE_CODE" => array(    // Тип цены
                            0 => "BASE",
                        ),
                        "SHOW_PREVIEW" => "Y",    // Показать картинку
                        "PREVIEW_WIDTH" => "75",    // Ширина картинки
                        "PREVIEW_HEIGHT" => "75",    // Высота картинки
                        "CONVERT_CURRENCY" => "Y",    // Показывать цены в одной валюте
                    ), false
                ); ?>
                <!--                SEARCH-->


            </div>
        </div>
    </div>
    <div class="header__middle">
        <div class="container header__container header__container_middle">
            <div class="header__col header__col_logo">
                <a href="javascript:void(0);" class="header__logo logo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => INCLUDE_AREAS_PATH . "/logo.php"
                        ),
                        false
                    ); ?>
                </a>
            </div>
            <div class="header__contacts"><span class="header__icon icon-comment"></span>
                <div class="header__col header__col_contacts">
                    <div class="contacts"><a href="tel:+74952150435" class="contacts__tel">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => INCLUDE_AREAS_PATH . "/phone_1.php"
                                ),
                                false
                            ); ?>
                        </a>
                        <div class="contacts__info"> <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => INCLUDE_AREAS_PATH . "/work_time_1.php"
                                ),
                                false
                            ); ?></div>
                    </div>
                </div>
                <div class="header__col header__col_contacts">
                    <div class="contacts"><a href="tel:+78003331204" class="contacts__tel">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => INCLUDE_AREAS_PATH . "/phone_2.php"
                                ),
                                false
                            ); ?>
                        </a>
                        <div class="contacts__info">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => INCLUDE_AREAS_PATH . "/work_time_2.php"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="header__col header__col_contacts"><a href="javascript:void(0);" class="link">Контактная
                        информация</a>
                </div>
            </div>

            <!--            BASKET-->

            <? $APPLICATION->IncludeComponent(
                "bitrix:sale.basket.basket.line",
                "lassie_basket",
                array(
                    "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",    // Страница корзины
                    "PATH_TO_PERSONAL" => SITE_DIR . "personal/",    // Страница персонального раздела
                    "SHOW_PERSONAL_LINK" => "N",    // Отображать персональный раздел
                    "SHOW_NUM_PRODUCTS" => "Y",    // Показывать количество товаров
                    "SHOW_TOTAL_PRICE" => "Y",    // Показывать общую сумму по товарам
                    "SHOW_PRODUCTS" => "N",    // Показывать список товаров
                    "POSITION_FIXED" => "N",    // Отображать корзину поверх шаблона
                    "SHOW_AUTHOR" => "Y",    // Добавить возможность авторизации
//                    "PATH_TO_REGISTER" => SITE_DIR . "login/",    // Страница регистрации
//                    "PATH_TO_PROFILE" => SITE_DIR . "personal/",    // Страница профиля
                ),
                false
            ); ?>
            <!--            BASKET-->
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">


            <!--            Навигация main меню-->
            <nav class="header__nav navigation">
                <p>
                    <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "second",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1"
	),
	false
); ?>
                </p>
            </nav>
        </div>
    </div>
    <!--            НАВИГАЦИЯ main меню -->

</header>


<!--            Слайдер-->
<!--    <div class="index__slider slider">-->
<!--        <ul class="slider__container">-->
<!--            <li class="slider__item">-->
<!--                <img src="-->
<? //= SITE_TEMPLATE_PATH . "/assets/images/slider-1.jpg" ?><!--" alt="" class="slider__img">-->
<!--                <div class="index__slider-title">Встречаем осень-->
<!--                    <br>с новой коллекцией-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="slider__item">-->
<!--                <img src="-->
<? //= SITE_TEMPLATE_PATH . "/assets/images/slider-1.jpg" ?><!--" alt="" class="slider__img">-->
<!--                <div class="index__slider-title">Встречаем осень-->
<!--                    <br>с новой коллекцией-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--            Слайдер-->

<!--    <section class="popular">-->
<!--        <div class="container">-->
<!--            <h1 class="heading"><span class="heading__text">Популярные товары</span></h1>-->
