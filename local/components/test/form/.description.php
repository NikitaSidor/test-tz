<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$arComponentDescription = array(
    "NAME" => Loc::getMessage("MY_COMPONENT_NAME"),
    "DESCRIPTION" => Loc::getMessage("MY_COMPONENT_DESCRIPTION"),
    "ICON" => "/images/icon.gif",
    "SORT" => 10,
    "PATH" => array(
        "ID" => "my_components",
        "NAME" => Loc::getMessage("MY_COMPONENT_PATH"),
        "SORT" => 10,
    ),
);
?>