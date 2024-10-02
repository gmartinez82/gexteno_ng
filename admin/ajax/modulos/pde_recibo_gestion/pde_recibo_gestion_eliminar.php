<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_recibo = new PdeRecibo();
$pde_recibo->setId($id, false);
$pde_recibo->deleteAll();
?>

