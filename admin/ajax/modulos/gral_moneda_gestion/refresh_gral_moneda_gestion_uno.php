<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$gral_moneda = GralMoneda::getOxId($id);

$estado = ($gral_moneda->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_moneda_gestion_uno.php';
?>

