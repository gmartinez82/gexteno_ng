<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_centro_recepcion = CliCentroRecepcion::getOxId($id);

$estado = ($cli_centro_recepcion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_centro_recepcion_uno.php';
?>

