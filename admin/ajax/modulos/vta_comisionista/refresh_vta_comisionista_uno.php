<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_comisionista = VtaComisionista::getOxId($id);

$estado = ($vta_comisionista->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comisionista_uno.php';
?>

