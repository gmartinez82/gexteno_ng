<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e600_g_dtip_d_e_g_cam_cond = EkuDeE600GDtipDEGCamCond::getOxId($id);
//Gral::prr($eku_de_e600_g_dtip_d_e_g_cam_cond);
?>

<div class="tabs ficha-eku_de_e600_g_dtip_d_e_g_cam_cond" identificador="<?php echo $eku_de_e600_g_dtip_d_e_g_cam_cond->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond eku_e601_icondope">
            <div class="label"><?php Lang::_lang('eku_e601_icondope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE601Icondope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond eku_e602_ddcondope">
            <div class="label"><?php Lang::_lang('eku_e602_ddcondope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE602Ddcondope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e600_g_dtip_d_e_g_cam_cond estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e600_g_dtip_d_e_g_cam_cond->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

