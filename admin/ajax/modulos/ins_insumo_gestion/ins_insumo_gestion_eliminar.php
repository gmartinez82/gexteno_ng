<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_insumo = new InsInsumo();
$ins_insumo->setId($id, false);
$ins_insumo->deleteAll();
?>

