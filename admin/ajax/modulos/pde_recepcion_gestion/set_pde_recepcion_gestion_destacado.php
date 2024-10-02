<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$recepcion_id = Gral::getVars(1, 'id', 0);
$pde_recepcion = PdeRecepcion::getOxId($recepcion_id);
$pde_recepcion->setPdeRecepcionDestacado();
?>
