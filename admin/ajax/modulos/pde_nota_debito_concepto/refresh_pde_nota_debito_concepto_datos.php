<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoConcepto::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoConcepto::getSesPagCantidad(), PdeNotaDebitoConcepto::getSesPag());
$pde_nota_debito_conceptos = PdeNotaDebitoConcepto::getPdeNotaDebitoConceptosDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_concepto_datos.php';
?>

