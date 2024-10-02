<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$gral_moneda = new GralMoneda();
$gral_moneda->setId($id, false);
$gral_moneda->deleteAll();
?>

