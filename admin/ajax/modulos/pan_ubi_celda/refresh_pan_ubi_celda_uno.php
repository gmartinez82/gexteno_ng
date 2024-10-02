<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pan_ubi_celda = PanUbiCelda::getOxId($id);

$estado = ($pan_ubi_celda->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pan_ubi_celda_uno.php';
?>

