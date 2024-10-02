<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pln_jornada = PlnJornada::getOxId($id);

$estado = ($pln_jornada->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pln_jornada_uno.php';
?>

