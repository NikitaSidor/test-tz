<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\IO\Directory;
use Bitrix\Main\IO\File;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arIBlocks = array();
$dbIBlock = CIBlock::GetList(array("SORT" => "ASC"), array("ACTIVE" => "Y"));
while($arIBlock = $dbIBlock->Fetch())
{
    $arIBlocks[$arIBlock["ID"]] = "[" . $arIBlock["ID"] . "] " . $arIBlock["NAME"];
}

$arComponentParameters = array(
    "PARAMETERS" => array(
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => Loc::getMessage("IBLOCK_ID"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
            "DEFAULT" => '',
            "REFRESH" => "Y",
        ),
        "MAIL_TEMPLATE" => array(
            "PARENT" => "BASE",
            "NAME" => Loc::getMessage("MAIL_TEMPLATE"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        )
    ),
);