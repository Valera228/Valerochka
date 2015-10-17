<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
</div>
</div>
<!-- end main content -->

<!-- start big footer -->
<div class="big-footer">
    <div class="top-shadow-footer"><!--  --></div>
    <div class="containit">

        <div class="full-width clearfix">
            <div class="one-fourth panel">
                <div class="nopad">
                    <h4>Head menu</h4>
                    <ul>
                        <li><a href="#">Head page</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">About us</a></li>
                        <li class="last"><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">

                <div class="padleft">
                    <h4>Collection</h4>
                    <ul>
                        <li><a href="#">Films</a></li>
                        <li><a href="#">Games</a></li>
                        <li class="last"><a href="#">Musics</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth panel border-vert-left">
                <div class="padleft">
                    <h4>Contacts</h4>
                    <p>Curabitur placerat, urna eu fringilla placerat, urna eu venenatis</p>

                    <b class="big">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"));?>
                    </b><br/>
                    <a href="mailto:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/mail.php"));?> ">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/mail.php"));?>
                    </a><br/>
                </div>
            </div>
            <div class="one-fourth-last panel border-vert-left newsletter">
                <div class="padleft">

                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/may/Магина.png">
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end big footer -->

<!-- start small footer -->
<div class="small-footer">
    <div class="containit">

        <div class="copy"> &copy; <?=date('Y');?> <a href="http://www.spinform.ro">Неон</a>. Все права защищены.</div>
        <div class="social">

            <ul>
                <li><a href="https://www.facebook.com/valerakuznesova"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/icon-facebook.png" width="26" height="25" alt=""  class="vm"/>Facebook</a></li>
                <li><a href="http://vk.com/id191743196"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icons/VK-1.png" width="35" height="26" alt=""  class="vm"/>Вконтакте</a></li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!-- end start small footer -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>