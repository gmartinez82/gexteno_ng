<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion_tipo_estado = PdiPedidoAgrupacionTipoEstado::getOxId($id);

$estado = ($pdi_pedido_agrupacion_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pdi_pedido_agrupacion_tipo_estado_uno.php';
?>

