<?php
namespace MIET\NEON;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ActorFilmTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'actor_film';
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
            'UF_ACTOR' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('FILM_NEON_UF_ACTOR_FIELD')
            ),
 //Описываем все связи с другими таблицами (внешние ключи)
 new Entity\ReferenceField(
     'UF_FILM_ID',
     'MIET\NEON\FilmTable',
     array('=this.UF_FILM_ID' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_ACTOR',
     'Bitrix\Iblock\ElementTable',
     array('=this.UF_ACTOR' => 'ref.ID')
 ),
 /*new Entity\ReferenceField(
     'UF_CREATED_BY',
     'Bitrix\Main\UserTable', //Привязка к сотруднику
     array('=this.UF_CREATED_BY' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_CHANGED_BY',
     'Bitrix\Main\UserTable',
     array('=this.UF_CHANGED_BY' => 'ref.ID')
 )
 miet\neon\ActorFilmTable(к которому привязываемся)для хайлоадов
 */
 );
 }
   /* public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" =>
                "Количество должно быть больше нуля")),
        );
    }
    public static function GetMinPeriod()
    {
        return current(self::getList(array(
            'select' => array(
                new Entity\ExpressionField('MIN_PERIOD', 'MIN(%s)',
                    array('UF_PERIOD'))
            )
        ))->fetch());
    }*/
}
