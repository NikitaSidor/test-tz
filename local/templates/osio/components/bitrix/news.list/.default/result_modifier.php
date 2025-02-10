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

        $arFilter = Array(
            "IBLOCK_ID"=>IntVal($arParams['IBLOCK_ID']),
            "ACTIVE"=>"Y",
            "INCLUDE_SUBSECTIONS" => 'Y'
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, Array("ID"));
        if($count = $res->SelectedRowsCount()) {
            $elementCount = $count;
        }
        $arParams['TITLE'] = str_replace('#COUNT#', $elementCount, $arParams['TITLE']);
    }
}

    unset($arItem);
    unset($section);