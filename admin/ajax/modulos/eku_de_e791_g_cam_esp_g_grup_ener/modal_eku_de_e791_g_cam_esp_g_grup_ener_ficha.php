<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e791_g_cam_esp_g_grup_ener = EkuDeE791GCamEspGGrupEner::getOxId($id);
//Gral::prr($eku_de_e791_g_cam_esp_g_grup_ener);
?>

<div class="tabs ficha-eku_de_e791_g_cam_esp_g_grup_ener" identificador="<?php echo $eku_de_e791_g_cam_esp_g_grup_ener->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e791_g_cam_esp_g_grup_ener id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e792_dnromed">
            <div class="label"><?php Lang::_lang('eku_e792_dnromed') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE792Dnromed()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e793_dactiv">
            <div class="label"><?php Lang::_lang('eku_e793_dactiv') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE793Dactiv()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e794_dcateg">
            <div class="label"><?php Lang::_lang('eku_e794_dcateg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE794Dcateg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e795_dlecant">
            <div class="label"><?php Lang::_lang('eku_e795_dlecant') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE795Dlecant()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e796_dlecact">
            <div class="label"><?php Lang::_lang('eku_e796_dlecact') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE796Dlecact()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener eku_e797_dconkwh">
            <div class="label"><?php Lang::_lang('eku_e797_dconkwh') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getEkuE797Dconkwh()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e791_g_cam_esp_g_grup_ener estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e791_g_cam_esp_g_grup_ener->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

