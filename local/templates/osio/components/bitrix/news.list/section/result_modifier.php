<?php

foreach ($arResult['ITEMS'] as &$arItem) {
    $sectionId = $arItem['IBLOCK_SECTION_ID'];

    // Проверяем, что ID раздела существует
    if ($sectionId > 0) {
        // Получаем информацию о разделе
        $rsSection = CIBlockSection::GetByID($sectionId);
        if ($arSection = $rsSection->GetNext()) {
            // Добавляем информацию о разделе в элемент
            $section = [
                'NAME' => $arSection['NAME'],
                'CODE' => $arSection['CODE'],
            ];
            $section['ITEMS'][] = $arItem;

            $arResult['SECTIONS'][] = $section;
        } else {
            $arItem['SECTION'] = false;
        }
    } else {
        $arItem['SECTION'] = false;
    }

    if (count($arResult['SECTIONS']) > 5) {
        break;
    }
}
unset($arItem);
unset($section);