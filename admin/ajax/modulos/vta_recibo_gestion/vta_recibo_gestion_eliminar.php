<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_recibo = new VtaRecibo();
$vta_recibo->setId($id, false);
$vta_recibo->deleteAll();
?>

