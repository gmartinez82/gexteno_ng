<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_hoja_ruta = VtaHojaRuta::getOxId($id);

$estado = ($vta_hoja_ruta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_hoja_ruta_gestion_uno.php';
?>

