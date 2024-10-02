<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_equipo = PrdEquipo::getOxId($id);

$estado = ($prd_equipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_equipo_uno.php';
?>

