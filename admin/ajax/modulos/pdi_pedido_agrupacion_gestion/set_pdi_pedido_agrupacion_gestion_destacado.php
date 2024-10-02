<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$oc_id = Gral::getVars(1, 'id', 0);
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($oc_id);
$pde_oc_agrupacion->setPdeOcAgrupacionDestacado();
?>
