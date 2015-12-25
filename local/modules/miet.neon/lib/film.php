<?php
namespace MIET\NEON;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class FilmTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'film';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('FILM_NEON_ID_FIELD')
            ),
            'UF_NAME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_NAME_ID_FIELD')
            ),
            'UF_YEAR' => array(
                'data_type' => 'string',
                'required' => false,
                'title' => Loc::getMessage('FILM_NEON_UF_YEAR_FIELD')
            ),
            'UF_PRICE' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, вданном случае текущий класс
                'validateValue' //Название метода-валидатора вданном классе
                ),
                'title' => Loc::getMessage('FILM_NEON_UF_PRICE_FIELD')
            ),
            'UF_IMAGE' => array(
                'data_type' => 'integer',
                'required' => false,
                'title' => Loc::getMessage('FILM_NEON_UF_IMAGE_FIELD')
            ),
            'UF_TIME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_TIME_BY_FIELD')
            ),
            'UF_TRAILER' => array(
                'data_type' => 'integer',
                'required' => false,
                'title' => Loc::getMessage('FILM_NEON_UF_TRAILER_FIELD')
            ),
            'UF_DESCRIPTION' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_DESCRIPTION_FIELD')
            ),
        );
    }
     public static function validateValue()
     {
         return array(
             new Entity\Validator\Range(0, null, false, array("MIN" =>
                 "Цена не может быть отрицательна")),
         );
     }
}
