<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_si_no = GralSiNo::getOxId($id);

$estado = ($gral_si_no->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_si_no_uno.php';
?>

