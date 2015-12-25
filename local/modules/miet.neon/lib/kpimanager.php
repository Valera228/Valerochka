<?php
namespace MIET\KPI;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);
class FilmManager {
    const IBLOCK_CODE_KPI = 'kpi';
    const IBLOCK_CODE_DEPARTMENTS = 'departments';
    public static function SaveFilm($arData){
        $db = Application::getConnection();
        $db->startTransaction();
        $result= FilmTable::add (array (
        ));
        if(!$result -> isSuccsess()) {
        $db -> rollbackTransaction();
        Return false;


        $elements = array();
            //Получаем ID инфоблока KPI по его символьному коду
            $rsIblock = \CIBlock::GetList(
                array(),
                array('CODE' => self::IBLOCK_CODE_KPI, 'SITE_ID' =>
                    SITE_ID)
            );
            $arIblock = $rsIblock->GetNext();
            $arFilter['IBLOCK_ID'] = $arIblock['ID'];
            $rsElements = \CIBlockElement::GetList(
                $arOrder, //массив полей сортировки элементов и её направления
         $arFilter, //массив полей фильтра элементов и их значений
         $arGroupBy, //массив полей для группировки элементов
         $arNavStartParams, //параметры для постраничной навигациии ограничения количества выводимых элементов
         $arSelectFields //массив возвращаемых полей элементов
         );
         while($arElements = $rsElements->Fetch()) {
             //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.
         foreach($arElements['PROPERTY_REGULATIONS_VALUE'] as $key
        => $idFileRegulation) {
                 $arElements['PROPERTY_REGULATIONS_VALUE'][$key] =
                     \CFile::GetFileArray($idFileRegulation);
             }
         $elements[] = $arElements;
         }
        return $elements;
     }

}