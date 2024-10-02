<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_remito_ajuste = new VtaRemitoAjuste();
$vta_remito_ajuste->setId($id, false);
$vta_remito_ajuste->deleteAll();
?>

