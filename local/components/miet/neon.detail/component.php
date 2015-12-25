<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;

\Bitrix\Main\Loader::includeModule('miet.neon');

use MIET\NEON;

if($_REQUEST['saveFilm']) {
    if(NEON\FilmManager::SaveFilm($_REQUEST)) {
        $arResult['OK'] = 'Изменения успешно сохранены';
    } else {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}

$arDir = CIBlockElement::GetList(
    array("NAME" => "asc", "PROPERTY_SECOND_NAME" => "asc"),
    array("IBLOCK_CODE" => "dir"),
    false,
    false,
    array("ID", "NAME", "PROPERTY_SECOND_NAME"));

while ($rowDir = $arDir->GetNext()) {
    $arResult['UF_DIRECTOR_ID'][] = $rowDir;
}

$arAct = CIBlockElement::GetList(
    array("NAME" => "asc", "PROPERTY_SECOND_NAME" => "asc"),
    array("IBLOCK_CODE" => "actor"),
    false,
    false,
    array("ID", "NAME", "PROPERTY_SECOND_NAME"));

while ($rowAct = $arAct->GetNext()) {
    $arResult['UF_ACTOR'][] = $rowAct;
}

$arCoun = CIBlockElement::GetList(
    array("NAME" => "asc"),
    array("IBLOCK_CODE" => "country"),
    false,
    false,
    array("ID", "NAME"));

while ($rowCoun = $arCoun->GetNext()) {
    $arResult['UF_COUNTRY_ID'][] = $rowCoun;
}

$arGen = CIBlockElement::GetList(
    array("NAME" => "asc"),
    array("IBLOCK_CODE" => "genre"),
    false,
    false,
    array("ID", "NAME"));

while ($rowGen = $arGen->GetNext()) {
    $arResult['UF_GENRE_ID'][] = $rowGen;
}

$arQual = CIBlockElement::GetList(
    array("NAME" => "asc"),
    array("IBLOCK_CODE" => "quality"),
    false,
    false,
    array("ID", "NAME"));

while ($rowQual = $arQual->GetNext()) {
    $arResult['UF_QUATITY_ID'][] = $rowQual;
}

$this->IncludeComponentTemplate();

?>