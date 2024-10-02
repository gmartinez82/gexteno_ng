<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pln_turno = PlnTurno::getOxId($id);

$estado = ($pln_turno->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pln_turno_uno.php';
?>

