<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_ajuste_haber = new VtaAjusteHaber();
$vta_ajuste_haber->setId($id, false);
$vta_ajuste_haber->deleteAll();
?>

