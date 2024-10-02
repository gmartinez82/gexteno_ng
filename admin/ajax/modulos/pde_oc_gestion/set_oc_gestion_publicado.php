<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$oc_id = Gral::getVars(2, 'oc_id', 0);
$pde_oc = PdeOc::getOxId($oc_id);
$pde_oc->setPdeOcPublicado();
?>
