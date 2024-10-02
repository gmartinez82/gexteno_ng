<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_ajuste_debe = new VtaAjusteDebe();
$vta_ajuste_debe->setId($id, false);
$vta_ajuste_debe->deleteAll();
?>

