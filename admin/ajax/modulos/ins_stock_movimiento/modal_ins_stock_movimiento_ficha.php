<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_movimiento = InsStockMovimiento::getOxId($id);
//Gral::prr($ins_stock_movimiento);
?>

<div class="tabs ficha-ins_stock_movimiento" identificador="<?php echo $ins_stock_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento ins_stock_tipo_movimiento_id">
            <div class="label"><?php Lang::_lang('InsStockTipoMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento pdi_pedido_id">
            <div class="label"><?php Lang::_lang('PdiPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getPdiPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento cantidad_real">
            <div class="label"><?php Lang::_lang('Cantidad Real') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getCantidadReal()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento cantidad_comprometida">
            <div class="label"><?php Lang::_lang('Cantidad Comprometida') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getCantidadComprometida()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento cantidad_pasivo">
            <div class="label"><?php Lang::_lang('Cant Pasivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getCantidadPasivo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento fechahora">
            <div class="label"><?php Lang::_lang('Fecha Hora') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getFechahora())) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento vta_remito_id">
            <div class="label"><?php Lang::_lang('VtaRemito') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getVtaRemito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento pde_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getPdeRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento ins_stock_transformacion_id">
            <div class="label"><?php Lang::_lang('InsStockTransformacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getInsStockTransformacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_movimiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_movimiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

