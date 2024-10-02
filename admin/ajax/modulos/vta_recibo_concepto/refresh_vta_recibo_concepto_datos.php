<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboConcepto::setSesPag($pag);

$criterio = new Criterio(VtaReciboConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboConcepto::getSesPagCantidad(), VtaReciboConcepto::getSesPag());
$vta_recibo_conceptos = VtaReciboConcepto::getVtaReciboConceptosDesdeBackend($paginador, $criterio);

include 'vta_recibo_concepto_datos.php';
?>

