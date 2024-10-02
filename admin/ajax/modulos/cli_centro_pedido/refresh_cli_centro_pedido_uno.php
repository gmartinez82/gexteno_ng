<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_centro_pedido = CliCentroPedido::getOxId($id);

$estado = ($cli_centro_pedido->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_centro_pedido_uno.php';
?>

