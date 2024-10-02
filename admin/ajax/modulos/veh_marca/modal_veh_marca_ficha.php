<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$veh_marca = VehMarca::getOxId($id);
//Gral::prr($veh_marca);
?>

<div class="tabs ficha-veh_marca" identificador="<?php echo $veh_marca->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par veh_marca id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getId()) ?>
            </div>
        </div>

	
        <div class="par veh_marca descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_marca codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par veh_marca observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par veh_marca orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getOrden()) ?>
            </div>
        </div>
		
        <div class="par veh_marca estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_marca->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

