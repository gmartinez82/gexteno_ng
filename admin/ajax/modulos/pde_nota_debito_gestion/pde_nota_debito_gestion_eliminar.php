<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_nota_debito = new PdeNotaDebito();
$pde_nota_debito->setId($id, false);
$pde_nota_debito->deleteAll();
?>

