<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$id = Gral::getVars(2, 'id');
$vta_politica_descuento = VtaPoliticaDescuento::getOxId($id);

$estado = ($vta_politica_descuento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_politica_descuento_gestion_uno.php';
?>

