<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcion::setSesPag($pag);

$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addDistinct(true);

$criterio->add('pde_oc.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_recepcion');
//$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_id', 'pde_recepcion.id');
$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.pde_recepcion_id', 'pde_recepcion.id');
$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcion::getSesPagCantidad(), PdeRecepcion::getSesPag());
$pde_recepcions = PdeRecepcion::getPdeRecepcions($paginador, $criterio);

include 'pde_recepcion_gestion_datos.php';
?>
<script>
setInitPdeRecepcions();
</script>