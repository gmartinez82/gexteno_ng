<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_nivel_aprovisionamiento = InsNivelAprovisionamiento::getOxId($id);

$estado = ($ins_nivel_aprovisionamiento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_nivel_aprovisionamiento_uno.php';
?>

