<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_movimiento_estado = FndCajaMovimientoEstado::getOxId($id);
//Gral::prr($fnd_caja_movimiento_estado);
?>

<div class="tabs ficha-fnd_caja_movimiento_estado" identificador="<?php echo $fnd_caja_movimiento_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_movimiento_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_movimiento_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado fnd_caja_movimiento_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getFndCajaMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado fnd_caja_movimiento_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getFndCajaMovimientoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

