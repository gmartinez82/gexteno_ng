<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_email = CliEmail::getOxId($id);

$estado = ($cli_email->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_email_uno.php';
?>

