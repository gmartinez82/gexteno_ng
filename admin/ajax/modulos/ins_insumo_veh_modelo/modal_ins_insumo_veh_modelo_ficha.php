<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_veh_modelo = InsInsumoVehModelo::getOxId($id);
//Gral::prr($ins_insumo_veh_modelo);
?>

<div class="tabs ficha-ins_insumo_veh_modelo" identificador="<?php echo $ins_insumo_veh_modelo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_veh_modelo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_veh_modelo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_veh_modelo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_veh_modelo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_veh_modelo veh_modelo_id">
            <div class="label"><?php Lang::_lang('VehModelo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_veh_modelo->getVehModelo()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

