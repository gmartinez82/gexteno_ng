<?php
//sleep(4);
include "_autoload.php";

$cotizacion_id = Gral::getVars(2, 'cotizacion_id', 0);
$pde_cotizacion = PdeCotizacion::getOxId($cotizacion_id);

$noleido = ($pde_cotizacion->esPdeCotizacionLeido()) ? '' : 'noleido';
$destacado = ($pde_cotizacion->esPdeCotizacionDestacado()) ? 'destacado' : '';

include 'pde_cotizacion_uno.php';
?>
