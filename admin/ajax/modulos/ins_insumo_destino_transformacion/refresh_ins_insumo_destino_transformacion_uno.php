<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($id);

$estado = ($ins_insumo_destino_transformacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_destino_transformacion_uno.php';
?>

