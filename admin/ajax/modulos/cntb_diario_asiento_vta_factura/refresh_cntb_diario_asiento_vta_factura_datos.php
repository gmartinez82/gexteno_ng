<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsientoVtaFactura::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsientoVtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento_vta_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsientoVtaFactura::getSesPagCantidad(), CntbDiarioAsientoVtaFactura::getSesPag());
$cntb_diario_asiento_vta_facturas = CntbDiarioAsientoVtaFactura::getCntbDiarioAsientoVtaFacturasDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_vta_factura_datos.php';
?>

