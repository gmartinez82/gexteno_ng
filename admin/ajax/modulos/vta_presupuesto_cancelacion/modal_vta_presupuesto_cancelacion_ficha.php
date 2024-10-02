<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_cancelacion = VtaPresupuestoCancelacion::getOxId($id);
//Gral::prr($vta_presupuesto_cancelacion);
?>

<div class="tabs ficha-vta_presupuesto_cancelacion" identificador="<?php echo $vta_presupuesto_cancelacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_cancelacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_cancelacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_cancelacion vta_presupuesto_ins_insumo_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_cancelacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_cancelacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_cancelacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_cancelacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_cancelacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_cancelacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

