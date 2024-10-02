<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_remito = VtaRemito::getOxId($id);

$estado = ($vta_remito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_remito_gestion_uno.php';
?>

