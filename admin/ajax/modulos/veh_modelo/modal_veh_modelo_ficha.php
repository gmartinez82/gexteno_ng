<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$veh_modelo = VehModelo::getOxId($id);
//Gral::prr($veh_modelo);
?>

<div class="tabs ficha-veh_modelo" identificador="<?php echo $veh_modelo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par veh_modelo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getId()) ?>
            </div>
        </div>

	
        <div class="par veh_modelo veh_marca_id">
            <div class="label"><?php Lang::_lang('Marca') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getVehMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_modelo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_modelo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par veh_modelo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par veh_modelo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par veh_modelo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_modelo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

