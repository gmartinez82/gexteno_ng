<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($id);
//Gral::prr($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras);
?>

<div class="tabs ficha-eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras" identificador="<?php echo $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e961_dtivehtras">
            <div class="label"><?php Lang::_lang('eku_e961_dtivehtras') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e962_dmarveh">
            <div class="label"><?php Lang::_lang('eku_e962_dmarveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e967_dtipidenveh">
            <div class="label"><?php Lang::_lang('eku_e967_dtipidenveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e963_dnroidveh">
            <div class="label"><?php Lang::_lang('eku_e963_dnroidveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e964_dadicveh">
            <div class="label"><?php Lang::_lang('eku_e964_dadicveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e965_dnromatveh">
            <div class="label"><?php Lang::_lang('eku_e965_dnromatveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras eku_e966_dnrovuelo">
            <div class="label"><?php Lang::_lang('eku_e966_dnrovuelo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE966Dnrovuelo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

