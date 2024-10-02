<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPresupuestoTipoVenta::setSesPag($pag);

$criterio = new Criterio(VtaPresupuestoTipoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPresupuestoTipoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_presupuesto_tipo_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPresupuestoTipoVenta::getSesPagCantidad(), VtaPresupuestoTipoVenta::getSesPag());
$vta_presupuesto_tipo_ventas = VtaPresupuestoTipoVenta::getVtaPresupuestoTipoVentasDesdeBackend($paginador, $criterio);

include 'vta_presupuesto_tipo_venta_datos.php';
?>

