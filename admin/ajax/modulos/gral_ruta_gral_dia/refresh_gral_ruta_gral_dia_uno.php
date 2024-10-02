<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_ruta_gral_dia = GralRutaGralDia::getOxId($id);

$estado = ($gral_ruta_gral_dia->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_ruta_gral_dia_uno.php';
?>

