<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($id);

$estado = ($vta_remito_ajuste->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_remito_ajuste_gestion_uno.php';
?>

