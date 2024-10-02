<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e810_g_cam_esp_g_grup_sup = EkuDeE810GCamEspGGrupSup::getOxId($id);
//Gral::prr($eku_de_e810_g_cam_esp_g_grup_sup);
?>

<div class="tabs ficha-eku_de_e810_g_cam_esp_g_grup_sup" identificador="<?php echo $eku_de_e810_g_cam_esp_g_grup_sup->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e810_g_cam_esp_g_grup_sup id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_e811_dnomcaj">
            <div class="label"><?php Lang::_lang('eku_e811_dnomcaj') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuE811Dnomcaj()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_e812_defectivo">
            <div class="label"><?php Lang::_lang('eku_e812_defectivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuE812Defectivo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_e813_dvuelto">
            <div class="label"><?php Lang::_lang('eku_e813_dvuelto') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuE813Dvuelto()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_e814_ddonac">
            <div class="label"><?php Lang::_lang('eku_e814_ddonac') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuE814Ddonac()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup eku_e815_ddesdonac">
            <div class="label"><?php Lang::_lang('eku_e815_ddesdonac') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getEkuE815Ddesdonac()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e810_g_cam_esp_g_grup_sup estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e810_g_cam_esp_g_grup_sup->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

