<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_pedido = PdePedido::getOxId($id);

$estado = ($pde_pedido->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_pedido_uno.php';
?>

