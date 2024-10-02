<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_telefono_tipo = CliTelefonoTipo::getOxId($id);

$estado = ($cli_telefono_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_telefono_tipo_uno.php';
?>

