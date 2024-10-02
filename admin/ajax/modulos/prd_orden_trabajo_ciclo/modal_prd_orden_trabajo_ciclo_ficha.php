<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo_ciclo = PrdOrdenTrabajoCiclo::getOxId($id);
//Gral::prr($prd_orden_trabajo_ciclo);
?>

<div class="tabs ficha-prd_orden_trabajo_ciclo" identificador="<?php echo $prd_orden_trabajo_ciclo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo_ciclo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo_ciclo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo prd_orden_trabajo_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getPrdOrdenTrabajo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo prd_linea_produccion_id">
            <div class="label"><?php Lang::_lang('PrdLineaProduccion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getPrdLineaProduccion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getNumero()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_ciclo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_ciclo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_ciclo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

