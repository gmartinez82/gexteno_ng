<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_cotizacion = PdeCotizacion::getOxId($id);

$estado = ($pde_cotizacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_cotizacion_uno.php';
?>

