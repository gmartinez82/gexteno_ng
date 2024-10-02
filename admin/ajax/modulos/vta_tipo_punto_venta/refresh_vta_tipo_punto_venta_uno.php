<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_tipo_punto_venta = VtaTipoPuntoVenta::getOxId($id);

$estado = ($vta_tipo_punto_venta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_tipo_punto_venta_uno.php';
?>

