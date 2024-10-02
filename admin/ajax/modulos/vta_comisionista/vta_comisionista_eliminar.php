<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_comisionista = new VtaComisionista();
$vta_comisionista->setId($id, false);
$vta_comisionista->deleteAll();
?>

