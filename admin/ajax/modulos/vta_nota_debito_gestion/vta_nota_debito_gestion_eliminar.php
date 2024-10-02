<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_nota_debito = new VtaNotaDebito();
$vta_nota_debito->setId($id, false);
$vta_nota_debito->deleteAll();
?>

