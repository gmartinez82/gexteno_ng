<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoConcepto::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoConcepto::getSesPagCantidad(), VtaNotaCreditoConcepto::getSesPag());
$vta_nota_credito_conceptos = VtaNotaCreditoConcepto::getVtaNotaCreditoConceptosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_concepto_datos.php';
?>

