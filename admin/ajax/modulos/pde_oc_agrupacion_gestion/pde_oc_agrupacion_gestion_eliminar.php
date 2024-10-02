<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_oc_agrupacion = new PdeOcAgrupacion();
$pde_oc_agrupacion->setId($id, false);
$pde_oc_agrupacion->deleteAll();
?>

