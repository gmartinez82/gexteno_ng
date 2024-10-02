<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_marca_imagen = InsMarcaImagen::getOxId($id);

$estado = ($ins_marca_imagen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_marca_imagen_uno.php';
?>

