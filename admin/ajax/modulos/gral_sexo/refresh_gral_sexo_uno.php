<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sexo = GralSexo::getOxId($id);

$estado = ($gral_sexo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_sexo_uno.php';
?>

