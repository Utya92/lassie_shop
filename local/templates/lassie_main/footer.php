<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<footer class="footer">
    <div class="container footer__container">
        <div class="footer__col">
            <h3 class="footer__title"> <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" =>INCLUDE_AREAS_PATH."/footer__title_1.php"
                    ),
                    false
                ); ?></h3>
<!--            <ul class="list">-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Как купить</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Пользовательское-->
<!--                        соглашение</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Контакты</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Способы оплаты заказа</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Доставка</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Возврат товара</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Таблица размеров</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Часто задаваемые вопросы</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Как правильно одевать-->
<!--                        ребенка</a>-->
<!--                </li>-->
<!--            </ul>-->
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                array(
                    "ROOT_MENU_TYPE" => "bottom_left",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "COMPONENT_TEMPLATE" => "bottom"
                ),
                false
            ); ?>
        </div>
        <div class="footer__col">
            <h3 class="footer__title"><? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => INCLUDE_AREAS_PATH."/footer__title_2.php"
                    ),
                    false
                ); ?></h3>
<!--            <ul class="list">-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">О компании lassie</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">История</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Качество</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Уход за вещами</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Категории-->
<!--                        Lassie<sup>®</sup></a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Символы Lassie<sup>®</sup></a>-->
<!--                </li>-->
<!--            </ul>-->
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                array(
                    "ROOT_MENU_TYPE" => "bottom",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "COMPONENT_TEMPLATE" => "bottom"
                ),
                false
            ); ?>
        </div>
        <div class="footer__col">
            <h3 class="footer__title"><? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" =>INCLUDE_AREAS_PATH."/footer__title_3.php"
                    ),
                    false
                ); ?></h3>
<!--            <ul class="list">-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Зарегистрироваться</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Войти в личный кабинет</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Забыли Ваш пароль?</a>-->
<!--                </li>-->
<!--                <li class="list__item"><a href="javascript:void(0);" class="footer__text">Защита персональной-->
<!--                        информации</a>-->
<!--                </li>-->
<!--            </ul>-->
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                array(
                    "ROOT_MENU_TYPE" => "bottom_right",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "COMPONENT_TEMPLATE" => "bottom"
                ),
                false
            ); ?>
        </div>
        <div class="footer__col">
            <h3 class="footer__title"><? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => INCLUDE_AREAS_PATH."/footer__title_4.php"
                    ),
                    false
                ); ?></h3>
            <ul class="footer__socials socials">
                <li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_vk"><span
                                class="icon-vkontakte"></span></a>
                </li>
                <li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_ok"><span
                                class="icon-odnoklassniki"></span></a>
                </li>
                <li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_fb"><span
                                class="icon-facebook"></span></a>
                </li>
                <li class="socials__item"><a href="javascript:void(0);" class="socials__name socials__name_tw"><span
                                class="icon-twitter-bird"></span></a>
                </li>
            </ul>
            <p class="footer__text">Следи за новостями и акциями
                <br>в социальных сетях. Будь первым!</p>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__container">
            <div class="footer__bottom-col">
                <p class="footer__text">Официальный интернет-магазин Lassie® в России</p>
            </div>
            <div class="footer__bottom-col">
                <div class="footer__text-group"><a href="tel:+78003331204" class="footer__text">8 (800)
                        333-12-04 </a><span class="footer__text">(горячая линия)</span>
                </div>
                <div class="footer__text-group"><a href="tel:+74952150435" class="footer__text">8 (495)
                        215-04-35 </a><span class="footer__text">(ежедневно с 9:00 до 24:00)</span>
                </div>
                <a href="mailto:order@lassieshop.ru" class="footer__text footer__text_block">order@lassieshop.ru</a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>