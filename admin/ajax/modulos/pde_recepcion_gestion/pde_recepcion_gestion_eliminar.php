<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_recepcion = new PdeRecepcion();
$pde_recepcion->setId($id, false);
$pde_recepcion->deleteAll();
?>

