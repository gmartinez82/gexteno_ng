<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_tipo_consumo = InsTipoConsumo::getOxId($id);

$estado = ($ins_tipo_consumo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_tipo_consumo_uno.php';
?>

