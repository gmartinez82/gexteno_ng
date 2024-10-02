<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPuntoVenta::setSesPag($pag);

$criterio = new Criterio(VtaPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPuntoVenta::getSesPagCantidad(), VtaPuntoVenta::getSesPag());
$vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentasDesdeBackend($paginador, $criterio);

include 'vta_punto_venta_datos.php';
?>

