<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_usuario_dato = UsUsuarioDato::getOxId($id);

$estado = ($us_usuario_dato->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_usuario_dato_uno.php';
?>

