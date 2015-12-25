<?php
namespace MIET\NEON;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class CountryFilmTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'country_film';
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
            'UF_FILM_ID' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_FILM_ID_FIELD')
            ),
            'UF_COUNTRY_ID' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_COUNTRY_ID_FIELD')
            ),

            //Описываем все связи с другими таблицами (внешние ключи)
            new Entity\ReferenceField(
                'UF_FILM_ID',
                'MIET\NEON\FilmTable',
                array('=this.UF_FILM_ID' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_COUNTRY_ID',
                'Bitrix\Iblock\ElementTable',
                array('=this.UF_COUNTRY_ID' => 'ref.ID')
            ),
        );
    }
}
