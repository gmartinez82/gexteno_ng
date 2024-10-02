<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prd_orden_trabajo_operacion_ope_operario = PrdOrdenTrabajoOperacionOpeOperario::getOxId($id);
//Gral::prr($prd_orden_trabajo_operacion_ope_operario);
?>

<div class="tabs ficha-prd_orden_trabajo_operacion_ope_operario" identificador="<?php echo $prd_orden_trabajo_operacion_ope_operario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prd_orden_trabajo_operacion_ope_operario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getId()) ?>
            </div>
        </div>

	
        <div class="par prd_orden_trabajo_operacion_ope_operario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario prd_orden_trabajo_operacion_id">
            <div class="label"><?php Lang::_lang('PrdOrdenTrabajoOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getPrdOrdenTrabajoOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario ope_operario_id">
            <div class="label"><?php Lang::_lang('OpeOperario') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getOpeOperario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prd_orden_trabajo_operacion_ope_operario estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prd_orden_trabajo_operacion_ope_operario->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

