<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaConcepto::setSesPag($pag);

$criterio = new Criterio(PdeFacturaConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaConcepto::getSesPagCantidad(), PdeFacturaConcepto::getSesPag());
$pde_factura_conceptos = PdeFacturaConcepto::getPdeFacturaConceptosDesdeBackend($paginador, $criterio);

include 'pde_factura_concepto_datos.php';
?>

