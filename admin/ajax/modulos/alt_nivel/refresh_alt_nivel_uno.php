<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$alt_nivel = AltNivel::getOxId($id);

$estado = ($alt_nivel->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'alt_nivel_uno.php';
?>

