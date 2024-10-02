<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$fnd_caja = new FndCaja();
$fnd_caja->setId($id, false);
$fnd_caja->deleteAll();
?>

