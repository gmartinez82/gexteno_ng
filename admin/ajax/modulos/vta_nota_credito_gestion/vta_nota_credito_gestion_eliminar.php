<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_nota_credito = new VtaNotaCredito();
$vta_nota_credito->setId($id, false);
$vta_nota_credito->deleteAll();
?>

