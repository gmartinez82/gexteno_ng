<?php
include_once '_autoload.php';

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
if ($pedido_id != 0) {
    $pde_pedido = PdePedido::getOxId($pedido_id);
}
//$pde_cotizacions = $pde_pedido->getPdeCotizacions();
$ins_insumo = $pde_pedido->getInsInsumo();

// se marca como leido el pedido
$pde_pedido->setPdePedidoLeido();

include "pde_pedido_modal_cotizacion_top.php";
?>
<div class="tabs">
    <ul>
        <li><a href="#tab_cotizaciones"><?php Lang::_lang('Cotizaciones del Pedido') ?></a></li>
        <li><a href="#tab_cotizaciones_historico"><?php Lang::_lang('Historial de Cotizaciones') ?> de "<strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>"</a></li>

    </ul>
    <div id="tab_cotizaciones" class="bloque-relacion tab_cotizaciones" pedido_id="<?php Gral::_echo($pde_pedido->getId()) ?>">

        <div class="cotizacion_datos">
            cargando ...
        </div>

    </div>

    <div id="tab_cotizaciones_historico" class="bloque-relacion tab_cotizaciones_historico">

        <div class="cotizacion_datos_historicos">
            cargando ...
        </div>

    </div>
</div>
<?php
$pde_pedido->setPdeCotizacionsLeido();
?>
<div class="div_modal_modal"></div>