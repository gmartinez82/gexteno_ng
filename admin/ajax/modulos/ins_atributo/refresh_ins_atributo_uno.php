<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_atributo = InsAtributo::getOxId($id);

$estado = ($ins_atributo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_atributo_uno.php';
?>

