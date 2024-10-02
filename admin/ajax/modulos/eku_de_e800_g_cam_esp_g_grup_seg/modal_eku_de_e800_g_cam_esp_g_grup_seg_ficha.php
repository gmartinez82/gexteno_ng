<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e800_g_cam_esp_g_grup_seg = EkuDeE800GCamEspGGrupSeg::getOxId($id);
//Gral::prr($eku_de_e800_g_cam_esp_g_grup_seg);
?>

<div class="tabs ficha-eku_de_e800_g_cam_esp_g_grup_seg" identificador="<?php echo $eku_de_e800_g_cam_esp_g_grup_seg->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e800_g_cam_esp_g_grup_seg id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg eku_e801_dcodempseg">
            <div class="label"><?php Lang::_lang('eku_e801_dcodempseg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getEkuE801Dcodempseg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e800_g_cam_esp_g_grup_seg estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e800_g_cam_esp_g_grup_seg->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

