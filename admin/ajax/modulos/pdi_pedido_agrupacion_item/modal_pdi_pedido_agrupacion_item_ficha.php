<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_pedido_agrupacion_item = PdiPedidoAgrupacionItem::getOxId($id);
//Gral::prr($pdi_pedido_agrupacion_item);
?>

<div class="tabs ficha-pdi_pedido_agrupacion_item" identificador="<?php echo $pdi_pedido_agrupacion_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_pedido_agrupacion_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_pedido_agrupacion_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item pdi_pedido_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdiPedidoAgrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getPdiPedidoAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_item estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_item->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

