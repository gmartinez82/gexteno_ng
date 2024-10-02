<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e010_g_dtip_d_e_g_cam_f_e = EkuDeE010GDtipDEGCamFE::getOxId($id);
//Gral::prr($eku_de_e010_g_dtip_d_e_g_cam_f_e);
?>

<div class="tabs ficha-eku_de_e010_g_dtip_d_e_g_cam_f_e" identificador="<?php echo $eku_de_e010_g_dtip_d_e_g_cam_f_e->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e eku_e011_iindpres">
            <div class="label"><?php Lang::_lang('eku_e011_iindpres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE011Iindpres()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e eku_e012_ddesindpres">
            <div class="label"><?php Lang::_lang('eku_e012_ddesindpres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE012Ddesindpres()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e eku_e013_dfecemnr">
            <div class="label"><?php Lang::_lang('eku_e013_dfecemnr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getEkuE013Dfecemnr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e010_g_dtip_d_e_g_cam_f_e estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e010_g_dtip_d_e_g_cam_f_e->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

