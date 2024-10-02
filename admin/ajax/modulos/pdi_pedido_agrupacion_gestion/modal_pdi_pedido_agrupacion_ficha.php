<?php
include "_autoload.php";

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();

if ($pdi_pedido_agrupacion != 0) {
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
}

$pdi_pedido_agrupacion_estados     = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionEstados();
$pdi_pedidos                       = $pdi_pedido_agrupacion->getPdiPedidos();
$pdi_pedido_agrupacion_items       = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
$pdi_pedido_agrupacion_tipo_estado = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado();
$pan_panol_origen                  = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino                 = $pdi_pedido_agrupacion->getPanPanolDestinoObj();
?>
<div class="tabs">
    <?php //include "pde_oc_agrupacion_modal_top.php" ?>   
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General'); ?></a></li>
        <li><a href="#tab_estados"><?php Lang::_lang('Estados de la APDI'); ?></a></li>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
            <li><a href="#tab_pedidos_agrupacion_items"><?php Lang::_lang('Items Temporales'); ?></a></li>        
        <?php } else { ?>
            <li><a href="#tab_pedidos"><?php Lang::_lang('Productos Pedidos'); ?></a></li>
        <?php } ?>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pdi_pedido_agrupacion_ficha_general.php"; ?>
    </div>

    <!-- Tab Estados -->
    <div id="tab_estados" class="datos">
        <?php include "modal_pdi_pedido_agrupacion_ficha_estados.php"; ?>
    </div>

    <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
        <!-- Tab Items Temporales -->
        <div id="tab_pedidos_agrupacion_items" class="datos">
            <?php include "modal_pdi_pedido_agrupacion_ficha_pedido_agrupacion_items.php"; ?>
        </div>
    <?php } else { ?>
        <!-- Tab Pedidos -->
        <div id="tab_pedidos" class="datos">
            <?php include "modal_pdi_pedido_agrupacion_ficha_pedidos.php"; ?>
        </div>
    <?php } ?>
</div>