<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxId($id);

$estado = ($vta_orden_venta_tipo_estado_facturacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_orden_venta_tipo_estado_facturacion_uno.php';
?>

