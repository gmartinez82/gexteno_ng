<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($id);

$estado = ($pdi_pedido_agrupacion->getEstado()) ? 'habilitado' : 'deshabilitado';

include 'pdi_pedido_agrupacion_gestion_uno.php';
?>
<script>
setInitPdiPedidoAgrupacions();
</script>
