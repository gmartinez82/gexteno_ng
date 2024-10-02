<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_unidad_medida_pedido = InsUnidadMedidaPedido::getOxId($id);

$estado = ($ins_unidad_medida_pedido->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_unidad_medida_pedido_uno.php';
?>

