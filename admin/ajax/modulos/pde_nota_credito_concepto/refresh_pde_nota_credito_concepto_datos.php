<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoConcepto::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoConcepto::getSesPagCantidad(), PdeNotaCreditoConcepto::getSesPag());
$pde_nota_credito_conceptos = PdeNotaCreditoConcepto::getPdeNotaCreditoConceptosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_concepto_datos.php';
?>

