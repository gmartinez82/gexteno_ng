<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_movimiento = FndCajaMovimiento::getOxId($id);
//Gral::prr($fnd_caja_movimiento);
?>

<div class="tabs ficha-fnd_caja_movimiento" identificador="<?php echo $fnd_caja_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento fnd_caja_origen">
            <div class="label"><?php Lang::_lang('FndCaja Origen') ?></div>
            <div class="dato">
                <?php Gral::_echo(($fnd_caja_movimiento->getFndCajaOrigen() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaOrigen())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento fnd_caja_destino">
            <div class="label"><?php Lang::_lang('FndCaja Destino') ?></div>
            <div class="dato">
                <?php Gral::_echo(($fnd_caja_movimiento->getFndCajaDestino() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaDestino())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento fnd_caja_tipo_movimiento_id">
            <div class="label"><?php Lang::_lang('FndCajaTipoMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getFndCajaTipoMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento autorizado">
            <div class="label"><?php Lang::_lang('Autorizado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getAutorizado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento autorizado_el">
            <div class="label"><?php Lang::_lang('Autorizado el') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_caja_movimiento->getAutorizadoEl())) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento autorizado_por">
            <div class="label"><?php Lang::_lang('Autorizado Por') ?></div>
            <div class="dato">
                <?php Gral::_echo(($fnd_caja_movimiento->getAutorizadoPor() != 'null') ? UsUsuario::getOxId($fnd_caja_movimiento->getAutorizadoPor())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento fnd_caja_movimiento_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getFndCajaMovimientoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

