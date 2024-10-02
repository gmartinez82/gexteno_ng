<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_cliente_vta_punto_venta = CliClienteVtaPuntoVenta::getOxId($id);

$estado = ($cli_cliente_vta_punto_venta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_cliente_vta_punto_venta_uno.php';
?>

