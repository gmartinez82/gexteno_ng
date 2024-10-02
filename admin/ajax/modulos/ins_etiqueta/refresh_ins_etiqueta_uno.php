<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_etiqueta = InsEtiqueta::getOxId($id);

$estado = ($ins_etiqueta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_etiqueta_uno.php';
?>

