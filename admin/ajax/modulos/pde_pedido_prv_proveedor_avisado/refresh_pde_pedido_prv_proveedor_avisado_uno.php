<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_pedido_prv_proveedor_avisado = PdePedidoPrvProveedorAvisado::getOxId($id);

include 'pde_pedido_prv_proveedor_avisado_uno.php';
?>

