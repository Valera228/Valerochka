<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' =>
        $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' =>
        $arResult['ERROR']));?>
<?endif;?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">

    <table>
       <tr>
           <td><?=GetMessage("NAME");?></td>
           <td><input type="text" name="NAME" value="<?=$REQUEST["UF_NAME"];?>"></td>
       </tr>
        <tr>
            <td><?=GetMessage("YEAR");?></td>
            <td><input type="text" name="YEAR" value="<?=$REQUEST["UF_YEAR"];?>"></td>
        </tr>

        <tr>
            <td><?=GetMessage("DESCRIPTION");?></td>
            <td><textarea name="DESCRIPTION" value="<?=$REQUEST["UF_DESCRIPTION"];?>" cols="50" rows="10" wrap="physical"></textarea></td>
        </tr>

        <tr>
            <td><?=GetMessage("TIME");?></td>
            <td><input type="text" name="TIME" value="<?=$REQUEST["UF_TIME"];?>"></td>
        </tr>

        <tr>
            <td><?=GetMessage("PRICE");?></td>
            <td><input type="text" name="PRICE" value="<?=$REQUEST["UF_PRICE"];?>"> <?=GetMessage("RUB");?> </td>
        </tr>

        <tr>
        <td><?=GetMessage("DIRECTOR");?></td>
            <td>
                <select name="UF_DIRECTOR_ID[]" multiple>
                    <?foreach($arResult['UF_DIRECTOR_ID'] as $arItem):?>
                        <option <?=$arItem['SELECTED'];?> value="<?=$arItem['ID'];?>">
                            <?=$arItem['NAME']." ".$arItem['PROPERTY_SECOND_NAME_VALUE'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?=GetMessage("ACTOR");?></td>
            <td>
                <select name="UF_ACTOR[]" multiple>
                    <?foreach($arResult['UF_ACTOR'] as $arItem):?>
                        <option <?=$arItem['SELECTED'];?> value="<?=$arItem['ID'];?>">
                            <?=$arItem['NAME']." ".$arItem['PROPERTY_SECOND_NAME_VALUE'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?=GetMessage("COUNTRY");?></td>
            <td>
                <select name="UF_COUNTRY_ID[]" multiple>
                    <?foreach($arResult['UF_COUNTRY_ID'] as $arItem):?>
                        <option <?=$arItem['SELECTED'];?> value="<?=$arItem['ID'];?>">
                            <?=$arItem['NAME'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        <tr>
            <td><?=GetMessage("GENRE");?></td>
            <td>
                <select name="UF_GENRE_ID[]" multiple>
                    <?foreach($arResult['UF_GENRE_ID'] as $arItem):?>
                        <option <?=$arItem['SELECTED'];?> value="<?=$arItem['ID'];?>">
                            <?=$arItem['NAME'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?=GetMessage("QUALITY");?></td>
            <td>
                <select name="UF_QUATITY_ID">
                    <?foreach($arResult['UF_QUATITY_ID'] as $arItem):?>
                        <option <?=$arItem['SELECTED'];?> value="<?=$arItem['ID'];?>">
                            <?=$arItem['NAME'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="saveFilm" value="Сохранить">
                <input type="reset" value="Очистить">
            </td>
        </tr>
</table>
</form>