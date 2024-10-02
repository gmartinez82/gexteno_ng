<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_politica_descuento_rango = VtaPoliticaDescuentoRango::getOxId($id);

$estado = ($vta_politica_descuento_rango->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_politica_descuento_rango_uno.php';
?>

