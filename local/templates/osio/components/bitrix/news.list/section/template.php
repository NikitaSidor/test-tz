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

<section class="actual-materials">
    <div class="actual-materials__content">
        <div class="actual-materials__top-row">
            <div class="actual-materials__tabs-nav">
                <ul class="actual-materials__tabs-nav-list">
                    <li class="actual-materials__tabs-nav-list-item">
                        <a href="#" class="actual-materials__tabs-nav-link active">
                            все
                        </a>
                    </li>

                    <?php foreach ($arResult['SECTIONS'] as $arSection): ?>
                        <li class="actual-materials__tabs-nav-list-item">
                            <a href="#" class="actual-materials__tabs-nav-link">
                                <?= $arSection['NAME'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="search-form">
                <form action="/" method="POST" class="search-form__form">
                    <div class="search-form__form-wrapper">
                        <input type="search" name="q" class="search-form__form-input"
                               placeholder="поиск по названию">
                        <button class="search-form__form-submit" type="submit">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#search"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php if (!empty($arParams['TITLE'])): ?>
            <h2 class="actual-materials__heading">
                <?= $arParams['TITLE'] ?>
            </h2>
        <?php endif; ?>
        <div class="actual-materials__tabs">
            <div class="actual-materials__tabs-item">
                <div class="actual-materials__slider">
                    <div class="actual-materials__slider-wrapper">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($arResult['ITEMS'] as $arItem):
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <div class="swiper-slide">
                                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="material-card"
                                           id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                            <div class="material-card__image-container">
                                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                                     alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                                     title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                                     class="material-card__image">
                                            </div>
                                            <div class="material-card__content">
                                                <div class="material-card__category">
                                                    <?= $arItem['SECTION']['NAME'] ?>
                                                </div>
                                                <h3 class="material-card__title">
                                                    <?= $arItem['NAME'] ?>
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $disabledBtnClass = count($arResult['ITEMS']) < 4 ? 'swiper-button-disabled swiper-button-lock' : '';
                    ?>
                    <div class="actual-materials__arrows">
                        <button class="actual-materials__arrow actual-materials__arrow--prev <?= $disabledBtnClass ?>">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#slider-arrow-left"></use>
                            </svg>
                        </button>
                        <button class="actual-materials__arrow actual-materials__arrow--next <?= $disabledBtnClass ?>">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#slider-arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <?php foreach ($arResult['SECTIONS'] as $arSection):
                $disabledBtnClass = count($arSection['ITEMS']) < 4 ? 'swiper-button-disabled swiper-button-lock' : ''; ?>
                <div class="actual-materials__tabs-item">
                    <div class="actual-materials__slider">
                        <div class="actual-materials__slider-wrapper">
                            <div class="swiper">
                                <?php foreach ($arSection['ITEMS'] as $arItem):
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <div class="swiper-slide">
                                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="material-card"
                                           id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                            <div class="material-card__image-container">
                                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                                     alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                                     title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                                     class="material-card__image">
                                            </div>
                                            <div class="material-card__content">
                                                <div class="material-card__category">
                                                    <?= $arItem['SECTION']['NAME'] ?>
                                                </div>
                                                <h3 class="material-card__title">
                                                    <?= $arItem['NAME'] ?>
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="actual-materials__arrows">
                            <button class="actual-materials__arrow actual-materials__arrow--prev <?= $disabledBtnClass ?>">
                                <svg width="14" height="14" aria-hidden="true">
                                    <use xlink:href="#slider-arrow-left"></use>
                                </svg>
                            </button>
                            <button class="actual-materials__arrow actual-materials__arrow--next <?= $disabledBtnClass ?>">
                                <svg width="14" height="14" aria-hidden="true">
                                    <use xlink:href="#slider-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>