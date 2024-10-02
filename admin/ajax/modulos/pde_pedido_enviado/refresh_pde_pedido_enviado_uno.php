<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_pedido_enviado = PdePedidoEnviado::getOxId($id);

$estado = ($pde_pedido_enviado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_pedido_enviado_uno.php';
?>

