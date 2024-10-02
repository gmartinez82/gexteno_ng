<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_medio_digital = CliMedioDigital::getOxId($id);

$estado = ($cli_medio_digital->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_medio_digital_uno.php';
?>

