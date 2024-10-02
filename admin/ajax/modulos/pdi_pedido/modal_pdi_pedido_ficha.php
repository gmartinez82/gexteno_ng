<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_pedido = PdiPedido::getOxId($id);
//Gral::prr($pdi_pedido);
?>

<div class="tabs ficha-pdi_pedido" identificador="<?php echo $pdi_pedido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_pedido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_pedido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pdi_tipo_origen_id">
            <div class="label"><?php Lang::_lang('PdiTipoOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getPdiTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pdi_urgencia_id">
            <div class="label"><?php Lang::_lang('PdiUrgencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getPdiUrgencia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pan_panol_origen">
            <div class="label"><?php Lang::_lang('PanPanolOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo(($pdi_pedido->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolOrigen())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pan_panol_destino">
            <div class="label"><?php Lang::_lang('PanPanolDestino') ?></div>
            <div class="dato">
                <?php Gral::_echo(($pdi_pedido->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolDestino())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par pdi_pedido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pdi_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdiTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getPdiTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pdi_pedido_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdiPedidoAgrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getPdiPedidoAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido pdi_pedido_agrupacion_item_id">
            <div class="label"><?php Lang::_lang('PdiPedidoAgrupacionItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getPdiPedidoAgrupacionItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido venta_perdida">
            <div class="label"><?php Lang::_lang('Venta Perdida') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido->getVentaPerdida())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

