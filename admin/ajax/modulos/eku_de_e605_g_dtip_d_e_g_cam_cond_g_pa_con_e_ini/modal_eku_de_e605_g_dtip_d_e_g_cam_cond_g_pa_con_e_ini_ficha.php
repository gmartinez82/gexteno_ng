<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($id);
//Gral::prr($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini);
?>

<div class="tabs ficha-eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini" identificador="<?php echo $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e606_itipago">
            <div class="label"><?php Lang::_lang('eku_e606_itipago') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE606Itipago()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e607_ddestipag">
            <div class="label"><?php Lang::_lang('eku_e607_ddestipag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE607Ddestipag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e608_dmontipag">
            <div class="label"><?php Lang::_lang('eku_e608_dmontipag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE608Dmontipag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e609_cmonetipag">
            <div class="label"><?php Lang::_lang('eku_e609_cmonetipag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE609Cmonetipag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e610_ddmonetipag">
            <div class="label"><?php Lang::_lang('eku_e610_ddmonetipag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE610Ddmonetipag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini eku_e611_dticamtipa">
            <div class="label"><?php Lang::_lang('eku_e611_dticamtipa') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE611Dticamtipa()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

