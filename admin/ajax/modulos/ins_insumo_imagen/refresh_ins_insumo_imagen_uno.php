<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_imagen = InsInsumoImagen::getOxId($id);

$estado = ($ins_insumo_imagen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_imagen_uno.php';
?>

