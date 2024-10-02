<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalVtaPuntoVenta::setSesPag($pag);

$criterio = new Criterio(GralSucursalVtaPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalVtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_vta_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalVtaPuntoVenta::getSesPagCantidad(), GralSucursalVtaPuntoVenta::getSesPag());
$gral_sucursal_vta_punto_ventas = GralSucursalVtaPuntoVenta::getGralSucursalVtaPuntoVentasDesdeBackend($paginador, $criterio);

include 'gral_sucursal_vta_punto_venta_datos.php';
?>

