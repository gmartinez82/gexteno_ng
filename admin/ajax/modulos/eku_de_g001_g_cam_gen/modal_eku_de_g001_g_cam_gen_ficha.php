<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_g001_g_cam_gen = EkuDeG001GCamGen::getOxId($id);
//Gral::prr($eku_de_g001_g_cam_gen);
?>

<div class="tabs ficha-eku_de_g001_g_cam_gen" identificador="<?php echo $eku_de_g001_g_cam_gen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_g001_g_cam_gen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_g001_g_cam_gen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen eku_g002_dordcompra">
            <div class="label"><?php Lang::_lang('eku_g002_dordcompra') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getEkuG002Dordcompra()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen eku_g003_dordvta">
            <div class="label"><?php Lang::_lang('eku_g003_dordvta') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getEkuG003Dordvta()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen eku_g004_dasiento">
            <div class="label"><?php Lang::_lang('eku_g004_dasiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getEkuG004Dasiento()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g001_g_cam_gen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g001_g_cam_gen estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_g001_g_cam_gen->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

