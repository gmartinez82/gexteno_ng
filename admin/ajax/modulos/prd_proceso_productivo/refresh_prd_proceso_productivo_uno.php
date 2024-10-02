<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_proceso_productivo = PrdProcesoProductivo::getOxId($id);

$estado = ($prd_proceso_productivo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_proceso_productivo_uno.php';
?>

