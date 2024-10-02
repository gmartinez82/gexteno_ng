<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getOxId($id);
//Gral::prr($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas);
?>

<div class="tabs ficha-eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas" identificador="<?php echo $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas eku_e653_cmonecuo">
            <div class="label"><?php Lang::_lang('eku_e653_cmonecuo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE653Cmonecuo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas eku_e654_ddmonecuo">
            <div class="label"><?php Lang::_lang('eku_e654_ddmonecuo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE654Ddmonecuo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas eku_e651_dmoncuota">
            <div class="label"><?php Lang::_lang('eku_e651_dmoncuota') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE651Dmoncuota()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas eku_e652_dvenccuo">
            <div class="label"><?php Lang::_lang('eku_e652_dvenccuo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE652Dvenccuo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

