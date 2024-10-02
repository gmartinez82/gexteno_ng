<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo_operacion_estado = PrdOrdenTrabajoOperacionEstado::getOxId($id);
//Gral::prr($prd_orden_trabajo_operacion_estado);
?>

<div class="tabs ficha-prd_orden_trabajo_operacion_estado" identificador="<?php echo $prd_orden_trabajo_operacion_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo_operacion_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo_operacion_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado prd_orden_trabajo_operacion_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado prd_orden_trabajo_operacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoOperacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_operacion_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_operacion_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_operacion_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

