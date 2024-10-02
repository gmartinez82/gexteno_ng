<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_cliente_vta_vendedor = CliClienteVtaVendedor::getOxId($id);

$estado = ($cli_cliente_vta_vendedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_cliente_vta_vendedor_uno.php';
?>

