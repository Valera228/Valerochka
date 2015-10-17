<?php
/**
 * Created by PhpStorm.
 * User: Валера
 * Date: 09.10.2015
 * Time: 0:12
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
$arTemplate = Array(
    "NAME" => GetMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => GetMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>

