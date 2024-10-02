<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pln_turno_novedad = PlnTurnoNovedad::getOxId($id);

$estado = ($pln_turno_novedad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pln_turno_novedad_uno.php';
?>

