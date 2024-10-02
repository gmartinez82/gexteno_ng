<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($id);
//Gral::prr($vta_presupuesto_veh_coche);
?>

<div class="tabs ficha-vta_presupuesto_veh_coche" identificador="<?php echo $vta_presupuesto_veh_coche->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_veh_coche id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_veh_coche descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche veh_coche_id">
            <div class="label"><?php Lang::_lang('VehCoche') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getVehCoche()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_veh_coche->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_veh_coche estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_veh_coche->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

