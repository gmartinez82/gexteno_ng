<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_centro_pedido_email = PdeCentroPedidoEmail::getOxId($id);

$estado = ($pde_centro_pedido_email->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_centro_pedido_email_uno.php';
?>

