<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getOxId($id);
//Gral::prr($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg);
?>

<div class="tabs ficha-eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg" identificador="<?php echo $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea791_dpoliza">
            <div class="label"><?php Lang::_lang('eku_e792_dnromed') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa791Dpoliza()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea792_dunidvig">
            <div class="label"><?php Lang::_lang('eku_ea792_dunidvig') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa792Dunidvig()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea793_dvigencia">
            <div class="label"><?php Lang::_lang('eku_ea793_dvigencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa793Dvigencia()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea794_dnumpoliza">
            <div class="label"><?php Lang::_lang('eku_ea794_dnumpoliza') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa794Dnumpoliza()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea795_dfecinivig">
            <div class="label"><?php Lang::_lang('eku_ea796_dfecfinvig') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa795Dfecinivig()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea796_dfecfinvig">
            <div class="label"><?php Lang::_lang('eku_ea796_dfecfinvig') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa796Dfecfinvig()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg eku_ea797_dcodint">
            <div class="label"><?php Lang::_lang('eku_ea797_dcodint') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa797Dcodint()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

