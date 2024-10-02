<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_nota_credito = new PdeNotaCredito();
$pde_nota_credito->setId($id, false);
$pde_nota_credito->deleteAll();
?>

