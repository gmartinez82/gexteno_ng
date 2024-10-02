<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($id);
//Gral::prr($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans);
?>

<div class="tabs ficha-eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans" identificador="<?php echo $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e981_inattrans">
            <div class="label"><?php Lang::_lang('eku_e981_inattrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e982_dnomtrans">
            <div class="label"><?php Lang::_lang('eku_e982_dnomtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e983_dructrans">
            <div class="label"><?php Lang::_lang('eku_e983_dructrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e984_ddvtrans">
            <div class="label"><?php Lang::_lang('eku_e984_ddvtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e985_itipidtrans">
            <div class="label"><?php Lang::_lang('eku_e985_itipidtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e986_ddtipidtrans">
            <div class="label"><?php Lang::_lang('eku_e986_ddtipidtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e987_dnumidtrans">
            <div class="label"><?php Lang::_lang('eku_e987_dnumidtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e988_cnactrans">
            <div class="label"><?php Lang::_lang('eku_e988_cnactrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e989_ddesnactrans">
            <div class="label"><?php Lang::_lang('eku_e989_ddesnactrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e990_dnumidchof">
            <div class="label"><?php Lang::_lang('eku_e990_dnumidchof') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e991_dnomchof">
            <div class="label"><?php Lang::_lang('eku_e991_dnomchof') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e992_ddomfisc">
            <div class="label"><?php Lang::_lang('eku_e992_ddomfisc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e993_ddirchof">
            <div class="label"><?php Lang::_lang('eku_e993_ddirchof') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e994_dnombag">
            <div class="label"><?php Lang::_lang('eku_e994_dnombag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e995_drucag">
            <div class="label"><?php Lang::_lang('eku_e995_drucag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e996_ddvag">
            <div class="label"><?php Lang::_lang('eku_e996_ddvag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans eku_e997_ddirage">
            <div class="label"><?php Lang::_lang('eku_e997_ddirage') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

