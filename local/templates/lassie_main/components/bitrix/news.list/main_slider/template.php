<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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


<?//
//echo '<pre>';
//print_r($arResult["ITEMS"][0]);
//echo '</pre>';
//?>


<div class="index__slider slider">
    <ul class="slider__container">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="slider__item">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?> ?>" alt="" class="slider__img">
                <div class="index__slider-title"><?= $arItem["PROPERTIES"]["str1"]["VALUE"]["TEXT"] ?>
                    <br><?= $arItem["PROPERTIES"]["str2"]["VALUE"]["TEXT"] ?>
                </div>
            </li>
            <li class="slider__item">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="" class="slider__img">
                <div class="index__slider-title"><?= $arItem["PROPERTIES"]["str3"]["VALUE"]["TEXT"] ?>
                    <br><?= $arItem["PROPERTIES"]["str4"]["VALUE"]["TEXT"] ?>
                </div>
            </li>
        <? endforeach; ?>
    </ul>
</div>