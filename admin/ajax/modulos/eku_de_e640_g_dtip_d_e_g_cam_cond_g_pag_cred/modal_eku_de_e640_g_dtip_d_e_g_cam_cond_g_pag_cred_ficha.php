<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = EkuDeE640GDtipDEGCamCondGPagCred::getOxId($id);
//Gral::prr($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred);
?>

<div class="tabs ficha-eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred" identificador="<?php echo $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_e641_icondcred">
            <div class="label"><?php Lang::_lang('eku_e641_icondcred') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_e642_ddcondcred">
            <div class="label"><?php Lang::_lang('eku_e642_ddcondcred') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_e643_dplazocre">
            <div class="label"><?php Lang::_lang('eku_e643_dplazocre') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE643Dplazocre()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_e644_dcuotas">
            <div class="label"><?php Lang::_lang('eku_e644_dcuotas') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE644Dcuotas()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred eku_e645_dmonent">
            <div class="label"><?php Lang::_lang('eku_e645_dmonent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE645Dmonent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

