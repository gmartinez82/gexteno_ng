<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_escenario = GralEscenario::getOxId($id);
//Gral::prr($gral_escenario);
?>

<div class="tabs ficha-gral_escenario" identificador="<?php echo $gral_escenario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_escenario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_escenario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_escenario gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_escenario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_escenario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_escenario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_escenario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_escenario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

