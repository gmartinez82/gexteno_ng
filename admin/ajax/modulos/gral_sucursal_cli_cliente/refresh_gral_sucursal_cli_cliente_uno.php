<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sucursal_cli_cliente = GralSucursalCliCliente::getOxId($id);

$estado = ($gral_sucursal_cli_cliente->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_sucursal_cli_cliente_uno.php';
?>

