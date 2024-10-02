<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($id);

$estado = ($vta_recibo_item_conciliado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_recibo_item_conciliado_uno.php';
?>

