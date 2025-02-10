<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("support");
require($_SERVER["DOCUMENT_ROOT"] . '/mail.php');
?>
    <section class="support-intro">
    <div class="support-intro__content">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "",
            array(),
            false,
            array()
        ); ?>
        <div class="support-intro__top-row">
            <h1 class="support-intro__heading">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/support/title.php",
                    array(),
                    array("MODE" => "text")
                );
                ?> </h1>
            <div class="support-intro__text">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR . "include/support/intro__text.php",
                    array(),
                    array("MODE" => "text")
                );
                ?>
            </div>
        </div>
        <div class="support-intro__cards">
            <a href="#" class="support-intro__card">
                <div class="support-intro__card-bg">
                    <img src="/local/templates/osio/images/support-intro/1.webp" alt=""
                         class="support-intro__card-bg-image">
                </div>
                <div class="support-intro__card-content">
                    <div class="support-intro__card-title-text">
                        215 центров по всей россии
                    </div>
                    <h3 class="support-intro__card-title">
                        Сервисные центры </h3>
                    <div class="support-intro__card-text">
                        Найдите ближайший центр для быстрой и качественной поддержки: от диагностики и профилактики до
                        замены деталей и технического обслуживания.
                    </div>
                    <div class="support-intro__card-link">
                        Перейти
                    </div>
                </div>
            </a> <a href="#" class="support-intro__card">
                <div class="support-intro__card-bg">
                    <img src="/local/templates/osio/images/support-intro/2.webp" alt=""
                         class="support-intro__card-bg-image">
                </div>
                <div class="support-intro__card-content">
                    <div class="support-intro__card-title-text">
                        оптимизация в пару кликов
                    </div>
                    <h3 class="support-intro__card-title">
                        драйверы и по </h3>
                    <div class="support-intro__card-text">
                        Мы предлагаем актуальные обновления и полезные инструменты, которые обеспечат стабильную и
                        эффективную работу техники. Найдите нужные драйверы и утилиты для оптимизации работы всего в
                        несколько кликов.
                    </div>
                    <div class="support-intro__card-link">
                        Перейти
                    </div>
                </div>
            </a>
        </div>
    </div>
    </section>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"section", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "section",
		"TITLE" => "Актуальное"
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "все материалы"
	),
	false
); ?>

<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc;
?>

<section class="contact-form">
    <div class="contact-form__content">
        <div class="contact-form__top">
            <h2 class="contact-form__heading">
                Нужна помощь? </h2>
        </div>
        <form method="POST" class="contact-form__form">
            <h3 class="contact-form__form-heading">
                Мы всегда рядом! </h3>
            <div class="contact-form__form-text">
                Если у вас возникли вопросы или вам требуется дополнительная информация, оставьте свои контактные
                данные, и наши специалисты свяжутся с вами в ближайшее время. Мы здесь, чтобы помочь вам!
            </div>
            <div class="contact-form__form-fields">
                <div class="contact-form__form-field">
                    <div class="contact-form__form-select" data-placeholder="Тема обращения">
                        <button class="contact-form__form-select-btn" type="button"><span
                                    class="contact-form__form-select-btn-text js-btn-text"> </span></button>
                        <div class="contact-form__form-select-dropdown">
                            <div class="contact-form__form-select-dropdown-inner">
                                <ul class="contact-form__form-select-dropdown-list">
                                    <li class="contact-form__form-select-dropdown-list-item"><label
                                                class="contact-form__form-select-choice"> <input type="radio"
                                                                                                 name="theme"
                                                                                                 class="contact-form__form-select-choice-input"
                                                                                                 value="Тема 1">
                                            <span class="contact-form__form-select-choice-text">
                            Тема 1 </span> </label></li>
                                    <li class="contact-form__form-select-dropdown-list-item"><label
                                                class="contact-form__form-select-choice"> <input type="radio"
                                                                                                 name="theme"
                                                                                                 class="contact-form__form-select-choice-input"
                                                                                                 value="Тема 2">
                                            <span class="contact-form__form-select-choice-text">
                            Тема 2 </span> </label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="text" class="contact-form__form-text-input" placeholder="Сообщение"
                               name="message">
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="text" class="contact-form__form-text-input" placeholder="Имя" name="name">
                    </div>
                </div>
                <div class="contact-form__form-field">
                    <div class="contact-form__form-input-wrapper">
                        <input type="email" class="contact-form__form-text-input" placeholder="Email" name="email">
                    </div>
                </div>
            </div>
            <div class="contact-form__form-policy">
                <label class="contact-form__form-policy-checkbox"> <input type="checkbox" name="policy" value="Y"
                                                                          required=""
                                                                          class="contact-form__form-checkbox-input">
                    <span class="contact-form__form-checkbox-mark"> </span> <span
                            class="contact-form__form-checkbox-text">
        Даю согласие на обработку <a href="#">персональных данных</a> </span> </label>
            </div>
            <button class="contact-form__form-submit" type="submit">
                Отправить
            </button>
        </form>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>