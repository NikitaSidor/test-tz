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
<section class="all-materials">
    <div class="all-materials__content">
        <div class="all-materials__top-row">
            <?php if (!empty($arParams['TITLE'])):?>
                <h2 class="all-materials__heading">
                    <?=$arParams['TITLE']?>
                </h2>
            <?php endif;?>
            <div class="search-form">
                <form action="/" method="POST" class="search-form__form">
                    <div class="search-form__form-wrapper">
                        <input type="search" name="q" class="search-form__form-input"
                               placeholder="поиск по названию">
                        <button class="search-form__form-submit" type="submit"></button>
                    </div>
                </form>
            </div>
        </div>
        <ul class="all-materials__list">
            <?php foreach($arResult["ITEMS"] as $arItem):?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="all-materials__list-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="material-card">
                    <div class="material-card__image-container">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                             class="material-card__image">
                    </div>
                    <div class="material-card__content">
                        <div class="material-card__category">
                            <?= $arItem["SECTION_NAME"] ?>
                        </div>
                        <h3 class="material-card__title">
                            <?= $arItem["NAME"] ?>
                        </h3>
                    </div>
                </a>
            </li>
    <? endforeach; ?>
        </ul>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <a href="<?=$arParams['IBLOCK_URL']?>" class="all-materials__show-more">
            показать еще </a>
        <? endif; ?>

    </div>
</section>
