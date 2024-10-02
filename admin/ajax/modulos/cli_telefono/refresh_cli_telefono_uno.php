<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_telefono = CliTelefono::getOxId($id);

$estado = ($cli_telefono->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_telefono_uno.php';
?>

