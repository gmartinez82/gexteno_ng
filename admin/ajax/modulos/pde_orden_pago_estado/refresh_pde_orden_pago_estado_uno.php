<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_orden_pago_estado = PdeOrdenPagoEstado::getOxId($id);

$estado = ($pde_orden_pago_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_orden_pago_estado_uno.php';
?>

