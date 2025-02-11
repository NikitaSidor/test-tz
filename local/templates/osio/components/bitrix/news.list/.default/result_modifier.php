<?php

foreach ($arResult['ITEMS'] as &$arItem) {
    $sectionId = $arItem['IBLOCK_SECTION_ID'];

    // Проверяем, что ID раздела существует
    if ($sectionId > 0) {
        // Получаем информацию о разделе
        $rsSection = CIBlockSection::GetByID($sectionId);
        if ($arSection = $rsSection->GetNext()) {
            // Добавляем информацию о разделе в элемент
            $arItem['SECTION_NAME'] = $arSection['NAME'];
        } else {
            // Раздел не найден (возможно, удален)
            $arItem['SECTION_NAME'] = false; // Или NULL, или другое значение по умолчанию
        }
    } else {
        // Элемент не привязан ни к одному разделу (в этом случае $arItem['IBLOCK_SECTION_ID'] == false или 0)
        $arItem['SECTION_NAME'] = false; // Или NULL, или другое значение по умолчанию
    }
}
if (!empty($arParams['TITLE'])) {
    if (strpos($arParams['TITLE'], '#COUNT#') !== false) {
        $elementCount = 0;

        $arFilter = array(
            "IBLOCK_ID" => IntVal($arParams['IBLOCK_ID']),
            "ACTIVE" => "Y",
            "INCLUDE_SUBSECTIONS" => 'Y'
        );
        $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, array("ID"));
        if ($count = $res->SelectedRowsCount()) {
            $elementCount = $count;
        }
        $arParams['TITLE'] = str_replace('#COUNT#', $elementCount, $arParams['TITLE']);
    }
}

CModule::IncludeModule("iblock"); // Убедитесь, что модуль iblock подключен

$arFilter = array(
    'SITE_ID' => SITE_ID,
    'ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y'
);

$db_iblock = CIBlock::GetList(array(), $arFilter, false, array('LIST_PAGE_URL'));

$iblockUrl = '';

if ($ar_iblock = $db_iblock->Fetch()) {
    $iblockUrl = $ar_iblock["LIST_PAGE_URL"];

    // Если используется SEF (ЧПУ), LIST_PAGE_URL может быть шаблоном
    // Например, #SITE_DIR#/news/
    // В этом случае, вам нужно заменить #SITE_DIR# на реальный URL сайта

    if (strpos($iblockUrl, "#SITE_DIR#") !== false) {
        $iblockUrl = str_replace("#SITE_DIR#", '//' . $_SERVER["HTTP_HOST"], $iblockUrl);
    }
    if (strpos($iblockUrl, "#IBLOCK_CODE#") !== false) {
        $iblockCode = $ar_iblock["CODE"];
        $iblockUrl = str_replace("#IBLOCK_CODE#", $iblockCode, $iblockUrl);
    }
    $arParams['IBLOCK_URL'] = $iblockUrl;
}
unset($db_iblock);
unset($ar_iblock);
unset($iblockCode);
unset($arItem);
unset($section);