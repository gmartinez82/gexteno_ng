<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPuntoVentaVtaPresupuestoTipoVenta::setSesPag($pag);

$criterio = new Criterio(VtaPuntoVentaVtaPresupuestoTipoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPuntoVentaVtaPresupuestoTipoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_punto_venta_vta_presupuesto_tipo_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPuntoVentaVtaPresupuestoTipoVenta::getSesPagCantidad(), VtaPuntoVentaVtaPresupuestoTipoVenta::getSesPag());
$vta_punto_venta_vta_presupuesto_tipo_ventas = VtaPuntoVentaVtaPresupuestoTipoVenta::getVtaPuntoVentaVtaPresupuestoTipoVentasDesdeBackend($paginador, $criterio);

include 'vta_punto_venta_vta_presupuesto_tipo_venta_datos.php';
?>

