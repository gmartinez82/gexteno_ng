<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_remito = new VtaRemito();
$vta_remito->setId($id, false);
$vta_remito->deleteAll();
?>

