<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <nav class="osio-header__nav">
        <ul class="osio-header__nav-list">
            <?php
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <li class="osio-header__nav-list-item">
                    <a href="<?= $arItem["LINK"] ?>" class="osio-header__nav-link">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>

            <? endforeach ?>
        </ul>
    </nav>
<? endif ?>