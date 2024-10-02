<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e820_g_cam_esp_g_grup_adi = EkuDeE820GCamEspGGrupAdi::getOxId($id);
//Gral::prr($eku_de_e820_g_cam_esp_g_grup_adi);
?>

<div class="tabs ficha-eku_de_e820_g_cam_esp_g_grup_adi" identificador="<?php echo $eku_de_e820_g_cam_esp_g_grup_adi->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e820_g_cam_esp_g_grup_adi id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e821_dciclo">
            <div class="label"><?php Lang::_lang('eku_e821_dciclo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE821Dciclo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e822_dfecinic">
            <div class="label"><?php Lang::_lang('eku_e822_dfecinic') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE822Dfecinic()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e823_dfecfinc">
            <div class="label"><?php Lang::_lang('eku_e823_dfecfinc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE823Dfecfinc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e824_dvencpag">
            <div class="label"><?php Lang::_lang('eku_e824_dvencpag') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE824Dvencpag()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e825_dcontrato">
            <div class="label"><?php Lang::_lang('eku_e825_dcontrato') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE825Dcontrato()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi eku_e826_dsalant">
            <div class="label"><?php Lang::_lang('eku_e826_dsalant') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE826Dsalant()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e820_g_cam_esp_g_grup_adi estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e820_g_cam_esp_g_grup_adi->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

