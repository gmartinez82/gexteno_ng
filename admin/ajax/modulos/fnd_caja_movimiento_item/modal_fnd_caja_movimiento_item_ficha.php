<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_movimiento_item = FndCajaMovimientoItem::getOxId($id);
//Gral::prr($fnd_caja_movimiento_item);
?>

<div class="tabs ficha-fnd_caja_movimiento_item" identificador="<?php echo $fnd_caja_movimiento_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_movimiento_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_movimiento_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item fnd_caja_movimiento_id">
            <div class="label"><?php Lang::_lang('FndCajaMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getFndCajaMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getImporte()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_movimiento_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_movimiento_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

