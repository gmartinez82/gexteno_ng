<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_linea_produccion = PrdLineaProduccion::getOxId($id);

$estado = ($prd_linea_produccion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_linea_produccion_uno.php';
?>

