<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

?>
<? //if($arParams["DISPLAY_TOP_PAGER"]):?>
<!--	--><? //=$arResult["NAV_STRING"]?>
<? //endif;?>
<? //$APPLICATION->ShowViewContent('lassieSearchFilter');?>

<?// $this->SetViewTarget('lassieSearchFilter'); ?>
<?php //$APPLICATION->IncludeComponent(
//    "bitrix:catalog.smart.filter",
//    "",
//    Array(
//        "PRICE_CODE" => $arParams["PRICE_CODE"],
//        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
//        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
//        "SECTION_ID" => $arCurSection['ID'],
//        "FILTER_NAME" => 'myFilter',
//        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
//        "CACHE_TIME" => $arParams["CACHE_TIME"],
//        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
//        "SAVE_IN_SESSION" => "N",
//        "XML_EXPORT" => "Y",
//        "SECTION_TITLE" => "NAME",
//        "SECTION_DESCRIPTION" => "DESCRIPTION",
//        'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
//        "TEMPLATE_THEME" => 'wood'
//    ),
//    $component,
//    array('HIDE_ICONS' => 'Y')
//); ?>
<?php //$this->EndViewTarget(); ?>

<div class="catalog__sort-group"><span class="catalog__sort-text text">Сортировать по:</span>
    <select name="sort" class="js-select select" onchange="location = this.value;">
        <option value="<?= $APPLICATION->GetCurPageParam('sort=popular&order=desc', ['sort', 'order']) ?>">
            Популярности
        </option>
        <option value="<?= $APPLICATION->GetCurPageParam('sort=price&order=asc', ['sort', 'order']) ?>">Цене</option>
        <option value="<?= $APPLICATION->GetCurPageParam('sort=new&order=desc', ['sort', 'order']) ?>">Новизне</option>
        <option value="<?= $APPLICATION->GetCurPageParam('sort=available&order=desc', ['sort', 'order']) ?>">Наличию
        </option>
    </select>
</div>


<div class="catalog__sort-group"><span class="catalog__sort-text text">Отображать по:</span>
    <select name="display" class="js-select select" onchange="location = this.value;">
        <option value="<?= $APPLICATION->GetCurPageParam('pagelimit=12', ['pagelimit']) ?>">12</option>
        <option value="<?= $APPLICATION->GetCurPageParam('pagelimit=9', ['pagelimit']) ?>">9</option>
        <option value="<?= $APPLICATION->GetCurPageParam('pagelimit=6', ['pagelimit']) ?>">6</option>
        <option value="<?= $APPLICATION->GetCurPageParam('pagelimit=3', ['pagelimit']) ?>">3</option>
    </select>
</div>


<?php
//сортировка по:
if (isset($_GET['sort'], $_GET['order'])) {
    if ($_GET['sort'] == 'price') {
        $arParams['ELEMENT_SORT_FIELD'] = 'catalog_PRICE_1';
    }
    if ($_GET['order'] == 'asc') {
        $arParams['ELEMENT_SORT_ORDER'] = 'asc';
    } else {
        $arParams['ELEMENT_SORT_ORDER'] = 'desc';
    }
    if ($_GET["sort"] == "popular") {
        $arParams["ELEMENT_SORT_FIELD2"] = "propertysort_SALELEADER";
    }
}

//Отображать по:
if (isset($_GET['pagelimit'])) {
    $pageLimit = abs((int) ($_GET['pagelimit']));
    if ($pageLimit > 0) {
        $arParams["PAGE_ELEMENT_COUNT"] = $pageLimit;
    }

}

?>


<? foreach ($arResult["ITEMS"] as $cell => $arElement): ?>
    <?
    $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div id="<?= $this->GetEditAreaId($arElement['ID']); ?>">

        <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>" title="<?= $arElement["NAME"] ?>">
            <img src="<?= $arElement["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arElement["NAME"] ?>"/>
        </a>

        <? foreach ($arElement["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
            <?= $arProperty["NAME"] ?>: <?
            if (is_array($arProperty["DISPLAY_VALUE"]))
                echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
            else
                echo $arProperty["DISPLAY_VALUE"]; ?>
        <? endforeach ?>

        <?= $arElement["PREVIEW_TEXT"] ?>


        <? if (is_array($arElement["OFFERS"]) && !empty($arElement["OFFERS"])): ?>
            <? foreach ($arElement["OFFERS"] as $arOffer): ?>
                <? foreach ($arOffer["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                    <?= $arProperty["NAME"] ?>: <?
                    if (is_array($arProperty["DISPLAY_VALUE"]))
                        echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
                    else
                        echo $arProperty["DISPLAY_VALUE"]; ?>
                <? endforeach ?>
                <? foreach ($arOffer["PRICES"] as $code => $arPrice): ?>
                    <? if ($arPrice["CAN_ACCESS"]): ?>
                        <?= $arResult["PRICES"][$code]["TITLE"]; ?>
                        <? if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
                            <s><?= $arPrice["PRINT_VALUE"] ?></s> <?= $arPrice["PRINT_DISCOUNT_VALUE"] ?>
                        <? else: ?>
                            <?= $arPrice["PRINT_VALUE"] ?>
                        <? endif ?>
                    <? endif; ?>
                <? endforeach; ?>
                <? if ($arOffer["CAN_BUY"]): ?>
                    <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
                        <input type="text" name="<? echo $arParams["PRODUCT_QUANTITY_VARIABLE"] ?>" value="1" size="5">
                        <input type="hidden" name="<? echo $arParams["ACTION_VARIABLE"] ?>" value="BUY">
                        <input type="hidden" name="<? echo $arParams["PRODUCT_ID_VARIABLE"] ?>"
                               value="<? echo $arOffer["ID"] ?>">
                        <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "BUY" ?>"
                               value="<? echo GetMessage("CATALOG_BUY") ?>">
                        <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "ADD2BASKET" ?>"
                               value="<? echo GetMessage("CATALOG_ADD") ?>">
                    </form>
                <? elseif (count($arResult["PRICES"]) > 0): ?>
                    <?= GetMessage("CATALOG_NOT_AVAILABLE") ?>
                <? endif ?>
            <? endforeach; ?>

            <!--            если товар не является торговым предложением-->
        <? else: ?>
            <? foreach ($arElement["PRICES"] as $code => $arPrice): ?>
                <? if ($arPrice["CAN_ACCESS"]): ?>
                    <?= $arResult["PRICES"][$code]["TITLE"]; ?>:&nbsp;&nbsp;
                    <? if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
                        <s><?= $arPrice["PRINT_VALUE"] ?></s> <?= $arPrice["PRINT_DISCOUNT_VALUE"] ?>
                    <? else: ?>
                        <?= $arPrice["PRINT_VALUE"] ?>
                    <? endif; ?>
                <? endif; ?>
            <? endforeach; ?>

            <? if ($arElement["CAN_BUY"]): ?>
                <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="<? echo $arParams["PRODUCT_QUANTITY_VARIABLE"] ?>" value="1" size="5">
                    <input type="hidden" name="<? echo $arParams["ACTION_VARIABLE"] ?>" value="BUY">
                    <input type="hidden" name="<? echo $arParams["PRODUCT_ID_VARIABLE"] ?>"
                           value="<? echo $arElement["ID"] ?>">
                    <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "BUY" ?>"
                           value="<? echo GetMessage("CATALOG_BUY") ?>">
                    <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "ADD2BASKET" ?>"
                           value="<? echo GetMessage("CATALOG_ADD") ?>">
                </form>
            <? elseif ((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])): ?>
                <?= GetMessage("CATALOG_NOT_AVAILABLE") ?>
            <? endif ?>
        <? endif ?>

    </div>

<? endforeach; ?>

<!--//пагинация работает в случае разделов, в которых есть товары-->
<?php $arResult['NAV_STRING'];?>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>

