<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaConcepto::setSesPag($pag);

$criterio = new Criterio(VtaFacturaConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaConcepto::getSesPagCantidad(), VtaFacturaConcepto::getSesPag());
$vta_factura_conceptos = VtaFacturaConcepto::getVtaFacturaConceptosDesdeBackend($paginador, $criterio);

include 'vta_factura_concepto_datos.php';
?>

