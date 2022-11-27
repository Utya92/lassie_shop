<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php //debug($arResult);?>

<? if (!empty($arResult)): ?>
    <nav class="header__nav navigation">
        <ul class="header__menu menu menu_width_full">
            <? $previousLevel = 0;
            foreach ($arResult

                     as $arItem): ?>
                <? if ($arItem["PERMISSION"] > "D" && $arItem["ITEM_TYPE"] == "P"): ?>
                    <? if ($arItem["DEPTH_LEVEL"] == 1  && $arItem["TEXT"]!="Распродажа"): ?>
                        <li class="menu__item"><a href="#"
                                                  class="menu__name"><?= $arItem["TEXT"] ?></a>
                    <? endif ?>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu__content">
                            <div class="dropdown-menu__img">
                                <img src="<?= DEFAULT_TEMPLATE_PASS . "/assets/images/header-submenu-1.jpg" ?>"
                                     alt="девочка">
                            </div>
                            <div class="dropdown-menu__menu-col">
                                <ul class="vertical-menu">
                                    <li class="vertical-menu__item">
                                        <span class="vertical-menu__name"><?= $arResult[9]["TEXT"] ?></span>
                                        <ul class="vertical-menu__submenu">
                                            <li class="vertical-menu__submenu-item">
                                                <a href="javascript:void(0);" class="link vertical-menu__submenu-name">
                                                    <?= $arResult[10]["TEXT"] ?>
                                                </a>
                                            </li>
                                            <li class="vertical-menu__submenu-item">
                                                <a href="javascript:void(0);" class="link vertical-menu__submenu-name">
                                                    <?= $arResult[11]["TEXT"] ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                       class="vertical-menu__name"><?= $arResult[13]["TEXT"] ?></a>
                                    </li>
                                    <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                       class="vertical-menu__name"><?= $arResult[14]["TEXT"] ?></a>
                                    </li>
                                    <li class="vertical-menu__item"><span class="vertical-menu__name"><?= $arResult[15]["TEXT"] ?></span>
                                        <ul class="vertical-menu__submenu">
                                            <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                       class="link vertical-menu__submenu-name"><?= $arResult[10]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__submenu-item"><a href="javascript:void(0);"
                                                                                       class="link vertical-menu__submenu-name"><?= $arResult[17]["TEXT"] ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <? if ($arItem["TEXT"] == "Для прогулки и спорта" || $arItem["TEXT"] == "Аксессуары"): ?>
                        <li class="menu__item"><a href="javascript:void(0);"
                                                  class="menu__name"><?= $arItem["TEXT"] ?></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu__content">
                                    <div class="dropdown-menu__img">
                                        <img src="<?= DEFAULT_TEMPLATE_PASS . "/assets/images/header-submenu-1.jpg" ?>"
                                             alt="девочка">
                                    </div>
                                    <div class="dropdown-menu__menu-col">
                                        <ul class="vertical-menu">
                                            <li class="vertical-menu__item"><span
                                                        class="vertical-menu__name"><?= $arResult[9]["TEXT"] ?></span>
                                                <ul class="vertical-menu__submenu">
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[10]["TEXT"] ?></a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Для
                                                            новорождённых</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[13]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[14]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><span
                                                        class="vertical-menu__name"><?= $arResult[15]["TEXT"] ?></span>
                                                <ul class="vertical-menu__submenu">
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[10]["TEXT"] ?></a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[17]["TEXT"] ?></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-menu__menu-col">
                                        <ul class="vertical-menu">
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[19]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[18]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><span class="vertical-menu__name"><?= $arResult[12]["TEXT"] ?></span>
                                                <ul class="vertical-menu__submenu">
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Шапка-шлем</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Шапка-бини</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Повязка на
                                                            голову</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Вязаные
                                                            шапки</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Шапки с
                                                            козырьком</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Непромокаемые
                                                            шапки</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Шапка на
                                                            завязках</a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Шапка с
                                                            помпоном </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <? endif; ?>
                    <? if ($arItem["TEXT"] == "Распродажа"): ?>
                        <li class="header menu__item"><a href="javascript:void(0);"
                                                         class="header__sale-wrapper menu__name"><span
                                        class="header__sale"><?= $arItem["TEXT"] ?></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu__content">
                                    <div class="dropdown-menu__img">
                                        <img src="<?= DEFAULT_TEMPLATE_PASS . "/assets/images/header-submenu-1.jpg" ?>"
                                             alt="девочка">
                                    </div>
                                    <div class="dropdown-menu__menu-col">
                                        <ul class="vertical-menu">
                                            <li class="vertical-menu__item"><span
                                                        class="vertical-menu__name"><?= $arResult[9]["TEXT"] ?></span>
                                                <ul class="vertical-menu__submenu">
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[10]["TEXT"] ?></a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name">Для
                                                            новорождённых</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[13]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><a href="javascript:void(0);"
                                                                               class="vertical-menu__name"><?= $arResult[14]["TEXT"] ?></a>
                                            </li>
                                            <li class="vertical-menu__item"><span
                                                        class="vertical-menu__name"><?= $arResult[15]["TEXT"] ?></span>
                                                <ul class="vertical-menu__submenu">
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[10]["TEXT"] ?></a>
                                                    </li>
                                                    <li class="vertical-menu__submenu-item"><a
                                                                href="javascript:void(0);"
                                                                class="link vertical-menu__submenu-name"><?= $arResult[17]["TEXT"] ?></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    <? endif; ?>
                <? endif ?>
            <? endforeach ?>
        </ul>
        <button class="burger-btn header__nav-btn js-nav-btn"><span class="burger-btn__switch">Развернуть меню </span>
        </button>
        <div class="navigation__collapse">
            <ul class="navigation__collapse-menu vertical-menu">
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Распродажа</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Для новорожденных</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Аксессуары</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Обувь</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Летняя одежда</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Для прогулки и спорта</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Игра слоями</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Верхняя одежда</a>
                </li>
                <li class="navigation__collapse-item vertical-menu__item"><a href="javascript:void(0);" class="vertical-menu__name">Коллекции</a>
                </li>
            </ul>
        </div>
    </nav>
<? endif ?>


    <!--                <img src="-->
<? //= DEFAULT_TEMPLATE_PASS . "/assets/images/header-submenu-1.jpg" ?><!--"-->
    <!--                Варежки-->
    <!--               -->
    <!--                Горловина и шарфы-->
    <!--                Носки-->
    <!--                Перчатки-->

    <!--    --><? // if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
    <!--        --><? //= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <!--    --><? // endif ?>

    <!--    --><? // if ($arItem["IS_PARENT"]): ?>
    <!---->
    <!--    --><? // if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <!--    <li><a href="--><? //= $arItem["LINK"] ?><!--"-->
    <!--           class=" ">--><? //= $arItem["!!!!!!!"] ?><!--</a>-->
    <!--    <ul>-->
    <!---->
<? // endif ?>
    <!---->
    <!---->
<? // endif ?>