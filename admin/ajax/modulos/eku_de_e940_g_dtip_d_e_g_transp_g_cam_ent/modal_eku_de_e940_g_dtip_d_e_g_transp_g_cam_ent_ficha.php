<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);
//Gral::prr($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent);
?>

<div class="tabs ficha-eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent" identificador="<?php echo $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e941_ddirlocent">
            <div class="label"><?php Lang::_lang('eku_e941_ddirlocent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e942_dnumcasent">
            <div class="label"><?php Lang::_lang('eku_e942_dnumcasent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e943_dcomp1ent">
            <div class="label"><?php Lang::_lang('eku_e943_dcomp1ent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e944_dcomp2ent">
            <div class="label"><?php Lang::_lang('eku_e944_dcomp2ent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e945_cdepent">
            <div class="label"><?php Lang::_lang('eku_e945_cdepent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e946_ddesdepent">
            <div class="label"><?php Lang::_lang('eku_e946_ddesdepent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e947_cdisent">
            <div class="label"><?php Lang::_lang('eku_e947_cdisent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e948_ddesdisent">
            <div class="label"><?php Lang::_lang('eku_e948_ddesdisent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e949_cciuent">
            <div class="label"><?php Lang::_lang('eku_e949_cciuent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e950_ddesciuent">
            <div class="label"><?php Lang::_lang('eku_e950_ddesciuent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent eku_e951_dtelent">
            <div class="label"><?php Lang::_lang('eku_e951_dtelent') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

