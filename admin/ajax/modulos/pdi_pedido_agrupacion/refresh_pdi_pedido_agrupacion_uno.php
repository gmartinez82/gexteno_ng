<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($id);

$estado = ($pdi_pedido_agrupacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pdi_pedido_agrupacion_uno.php';
?>

