<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/catalog/",
        "SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
        "DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "5",
        "DEPTH_LEVEL" => "3",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);

//способ добавления пункта home в меню в начало
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

