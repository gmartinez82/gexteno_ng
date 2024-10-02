<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$prv_insumo = new PrvInsumo();
$prv_insumo->setId($id, false);
//$prv_insumo->deleteAll();
?>

