<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_estado = VtaPresupuestoEstado::getOxId($id);
//Gral::prr($vta_presupuesto_estado);
?>

<div class="tabs ficha-vta_presupuesto_estado" identificador="<?php echo $vta_presupuesto_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado vta_presupuesto_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getVtaPresupuestoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

