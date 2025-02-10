<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\UserTable;
use Bitrix\Main\GroupTable;
use Bitrix\Main\UserGroupTable;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Mail\Event;  // Для отправки почты (D7)
use Bitrix\Iblock\ElementTable; // Для работы с элементами инфоблока
Loc::loadMessages(__FILE__);

class MyFormComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // Подключаем модуль main
        if (!CModule::IncludeModule("main")) {
            ShowError(Loc::getMessage("MODULE_MAIN_NOT_INSTALLED"));
            return;
        }

        $this->includeComponentTemplate();
    }

};

?>