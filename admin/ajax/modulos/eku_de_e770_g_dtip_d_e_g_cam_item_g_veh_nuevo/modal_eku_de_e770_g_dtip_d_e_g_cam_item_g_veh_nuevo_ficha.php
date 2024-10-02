<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($id);
//Gral::prr($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo);
?>

<div class="tabs ficha-eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo" identificador="<?php echo $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_de_e700_g_dtip_d_e_g_cam_item_id">
            <div class="label"><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e771_itipopvn">
            <div class="label"><?php Lang::_lang('eku_e771_itipopvn') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE771Itipopvn()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e772_ddestipopvn">
            <div class="label"><?php Lang::_lang('eku_e772_ddestipopvn') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE772Ddestipopvn()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e773_dchasis">
            <div class="label"><?php Lang::_lang('eku_e773_dchasis') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE773Dchasis()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e774_dcolor">
            <div class="label"><?php Lang::_lang('eku_e774_dcolor') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE774Dcolor()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e775_dpotencia">
            <div class="label"><?php Lang::_lang('eku_e775_dpotencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE775Dpotencia()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e776_dcapmot">
            <div class="label"><?php Lang::_lang('eku_e776_dcapmot') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE776Dcapmot()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e777_dpnet">
            <div class="label"><?php Lang::_lang('eku_e777_dpnet') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE777Dpnet()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e778_dpbruto">
            <div class="label"><?php Lang::_lang('eku_e778_dpbruto') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE778Dpbruto()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e779_itipcom">
            <div class="label"><?php Lang::_lang('eku_e779_itipcom') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE779Itipcom()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e780_ddestipcom">
            <div class="label"><?php Lang::_lang('eku_e780_ddestipcom') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE780Ddestipcom()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e781_dnromotor">
            <div class="label"><?php Lang::_lang('eku_e781_dnromotor') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE781Dnromotor()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e782_dcaptracc">
            <div class="label"><?php Lang::_lang('eku_e782_dcaptracc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE782Dcaptracc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e783_danofab">
            <div class="label"><?php Lang::_lang('eku_e783_danofab') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE783Danofab()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e784_ctipveh">
            <div class="label"><?php Lang::_lang('eku_e784_ctipveh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE784Ctipveh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e785_dcapac">
            <div class="label"><?php Lang::_lang('eku_e785_dcapac') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE785Dcapac()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo eku_e786_dcilin">
            <div class="label"><?php Lang::_lang('eku_e786_dcilin') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE786Dcilin()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

