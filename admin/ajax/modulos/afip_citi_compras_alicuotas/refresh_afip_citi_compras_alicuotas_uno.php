<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$afip_citi_compras_alicuotas = AfipCitiComprasAlicuotas::getOxId($id);

$estado = ($afip_citi_compras_alicuotas->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'afip_citi_compras_alicuotas_uno.php';
?>

