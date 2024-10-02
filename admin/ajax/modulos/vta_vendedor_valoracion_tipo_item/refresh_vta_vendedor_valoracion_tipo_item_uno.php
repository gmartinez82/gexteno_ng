<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($id);

$estado = ($vta_vendedor_valoracion_tipo_item->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_vendedor_valoracion_tipo_item_uno.php';
?>

