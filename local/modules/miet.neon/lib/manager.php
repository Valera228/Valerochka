<?php
namespace MIET\NEON;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
use MIET\NEON\FilmTable;
use MIET\NEON\DirectorFilmTable;
use MIET\NEON\ActorFilmTable;
use MIET\NEON\CountryFilmTable;
use MIET\NEON\GenreFilmTable;
use MIET\NEON\QualityFilmTable;

Loc::loadMessages(__FILE__);
class FilmManager
{
    public static function SaveFilm($arData)
    {
        $db = Application::getConnection();
        $db->startTransaction();
        $result = FilmTable::add(array(
            "UF_NAME" => $arData["NAME"],
            "UF_YEAR" => $arData["YEAR"],
            "UF_DESCRIPTION" => $arData["DESCRIPTION"],
            "UF_TIME" => $arData["TIME"],
            "UF_PRICE" => $arData["PRICE"]
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $idFilm = $result->getId();

        foreach ($arData["UF_DIRECTOR_ID"] as $idDirec) {
            $result = DirectorFilmTable::add(array(
                "UF_DIRECTOR_ID" => $idDirec,
                "UF_FILM_ID" => $idFilm
            ));
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        foreach ($arData["UF_ACTOR"] as $idAct) {
            $result = ActorFilmTable::add(array(
                "UF_ACTOR" => $idAct,
                "UF_FILM_ID" => $idFilm
            ));
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        foreach ($arData["UF_COUNTRY_ID"] as $idCoun) {
            $result = CountryFilmTable::add(array(
                "UF_COUNTRY_ID" => $idCoun,
                "UF_FILM_ID" => $idFilm
            ));
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        foreach ($arData["UF_GENRE_ID"] as $idGen) {
            $result = GenreFilmTable::add(array(
                "UF_GENRE_ID" => $idGen,
                "UF_FILM_ID" => $idFilm
            ));
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        foreach ($arData["UF_QUATITY_ID"] as $idQual) {
            $result = QualityFilmTable::add(array(
                "UF_QUATITY_ID" => $idQual,
                "UF_FILM_ID" => $idFilm
            ));
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }

        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        } else {
            $db->rollbackTransaction();
            return false;
        }
    }
}