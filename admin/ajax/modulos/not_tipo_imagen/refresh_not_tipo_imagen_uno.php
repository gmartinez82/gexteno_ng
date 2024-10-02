<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_tipo_imagen = NotTipoImagen::getOxId($id);

$estado = ($not_tipo_imagen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_tipo_imagen_uno.php';
?>

