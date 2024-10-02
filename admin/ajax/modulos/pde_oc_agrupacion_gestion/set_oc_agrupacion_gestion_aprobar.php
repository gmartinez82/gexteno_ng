<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_agrupacion_id = Gral::getVars(2, 'pde_oc_agrupacion_id', 0);
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
$pde_oc_agrupacion->setPdeOcAgrupacionGenerarOCs();
?>
