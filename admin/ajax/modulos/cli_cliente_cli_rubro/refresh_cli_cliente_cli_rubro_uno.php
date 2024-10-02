<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_cliente_cli_rubro = CliClienteCliRubro::getOxId($id);

include 'cli_cliente_cli_rubro_uno.php';
?>

