<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_factura_estado = VtaFacturaEstado::getOxId($id);

$estado = ($vta_factura_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_factura_estado_uno.php';
?>

