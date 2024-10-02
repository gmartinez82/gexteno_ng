<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_punto_venta_actual = VtaPuntoVentaActual::getOxId($id);

$estado = ($vta_punto_venta_actual->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_punto_venta_actual_uno.php';
?>

