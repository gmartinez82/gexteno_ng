<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_centro_pedido_prv_proveedor = PdeCentroPedidoPrvProveedor::getOxId($id);

include 'pde_centro_pedido_prv_proveedor_uno.php';
?>

