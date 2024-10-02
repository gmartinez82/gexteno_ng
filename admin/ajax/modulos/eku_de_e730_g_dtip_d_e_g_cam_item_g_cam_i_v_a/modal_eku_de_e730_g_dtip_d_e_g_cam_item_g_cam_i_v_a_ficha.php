<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($id);
//Gral::prr($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a);
?>

<div class="tabs ficha-eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a" identificador="<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_de_e700_g_dtip_d_e_g_cam_item_id">
            <div class="label"><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e731_iafeciva">
            <div class="label"><?php Lang::_lang('eku_e731_iafeciva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e732_ddesafeciva">
            <div class="label"><?php Lang::_lang('eku_e732_ddesafeciva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e733_dpropiva">
            <div class="label"><?php Lang::_lang('eku_e733_dpropiva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e734_dtasaiva">
            <div class="label"><?php Lang::_lang('eku_e734_dtasaiva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e735_dbasgraviva">
            <div class="label"><?php Lang::_lang('eku_e735_dbasgraviva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a eku_e736_dliqivaitem">
            <div class="label"><?php Lang::_lang('eku_e736_dliqivaitem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

