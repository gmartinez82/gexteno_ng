<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$cotizacion_id = Gral::getVars(2, 'cotizacion_id', 0);
$pde_cotizacion = PdeCotizacion::getOxId($cotizacion_id);
$pde_cotizacion->setPdeCotizacionDestacado();
?>
