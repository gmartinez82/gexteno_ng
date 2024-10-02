<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($id);
//Gral::prr($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d);
?>

<div class="tabs ficha-eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d" identificador="<?php echo $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e621_identarj">
            <div class="label"><?php Lang::_lang('eku_e621_identarj') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE621Identarj()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e622_ddesdentarj">
            <div class="label"><?php Lang::_lang('eku_e622_ddesdentarj') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE622Ddesdentarj()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e623_drsprotar">
            <div class="label"><?php Lang::_lang('eku_e623_drsprotar') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE623Drsprotar()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e624_drucprotar">
            <div class="label"><?php Lang::_lang('eku_e624_drucprotar') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE624Drucprotar()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e625_ddvprotar">
            <div class="label"><?php Lang::_lang('eku_e625_ddvprotar') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE625Ddvprotar()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e626_iforpropa">
            <div class="label"><?php Lang::_lang('eku_e626_iforpropa') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE626Iforpropa()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e627_dcodauope">
            <div class="label"><?php Lang::_lang('eku_e627_dcodauope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE627Dcodauope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e628_dnomtit">
            <div class="label"><?php Lang::_lang('eku_e628_dnomtit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE628Dnomtit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d eku_e629_dnumtarj">
            <div class="label"><?php Lang::_lang('eku_e629_dnumtarj') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE629Dnumtarj()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

