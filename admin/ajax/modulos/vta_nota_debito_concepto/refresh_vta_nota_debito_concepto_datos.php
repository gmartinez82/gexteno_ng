<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoConcepto::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoConcepto::getSesPagCantidad(), VtaNotaDebitoConcepto::getSesPag());
$vta_nota_debito_conceptos = VtaNotaDebitoConcepto::getVtaNotaDebitoConceptosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_concepto_datos.php';
?>

