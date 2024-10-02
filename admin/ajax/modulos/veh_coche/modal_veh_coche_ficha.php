<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$veh_coche = VehCoche::getOxId($id);
//Gral::prr($veh_coche);
?>

<div class="tabs ficha-veh_coche" identificador="<?php echo $veh_coche->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par veh_coche id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getId()) ?>
            </div>
        </div>

	
        <div class="par veh_coche veh_modelo_id">
            <div class="label"><?php Lang::_lang('Modelo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getVehModelo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche version">
            <div class="label"><?php Lang::_lang('Version') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getVersion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par veh_coche patente">
            <div class="label"><?php Lang::_lang('Patente') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getPatente()) ?>
            </div>
        </div>
		
        <div class="par veh_coche anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getAnio()) ?>
            </div>
        </div>
		
        <div class="par veh_coche observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getOrden()) ?>
            </div>
        </div>
		
        <div class="par veh_coche estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

