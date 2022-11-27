<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
    <ul class="header__top-menu menu">
    <?php foreach ($arResult as $item): ?>
    <li class="menu__item"><a href="<?= $item["LINK"] ?>" class="link menu__name">
            <?= $item["TEXT"] ?> </a>
        <?php endforeach; ?>
    </ul>
