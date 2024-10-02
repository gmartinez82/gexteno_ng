<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$pag = Gral::getVars(2, 'pag', 1);
PdiPedidoAgrupacion::setSesPag($pag);

// se inicializan los centros de pedido que el usuario puede gestionar
$string_panol_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);

//$criterio->add('pdi_pedido_agrupacion.pde_panol_id', $string_panol_ids, Criterio::IN);
$criterio->addTabla('pdi_pedido_agrupacion');
$criterio->addRealJoin('pdi_pedido_agrupacion_estado', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_id', 'pdi_pedido_agrupacion.id');
$criterio->addRealJoin('pdi_pedido_agrupacion_destinatario', 'pdi_pedido_agrupacion_destinatario.pdi_pedido_agrupacion_id', 'pdi_pedido_agrupacion.id');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiPedidoAgrupacion::getSesPagCantidad(), PdiPedidoAgrupacion::getSesPag());
$pdi_pedido_agrupacions = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio);

include 'pdi_pedido_agrupacion_gestion_datos.php';
?>
<script>
setInitPdiPedidoAgrupacions();
</script>
