<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboConcepto::setSesPag($pag);

$criterio = new Criterio(PdeReciboConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboConcepto::getSesPagCantidad(), PdeReciboConcepto::getSesPag());
$pde_recibo_conceptos = PdeReciboConcepto::getPdeReciboConceptosDesdeBackend($paginador, $criterio);

include 'pde_recibo_concepto_datos.php';
?>

