<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_comision = new VtaComision();
$vta_comision->setId($id, false);
$vta_comision->deleteAll();
?>

