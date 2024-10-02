<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaTipoConcepto::setSesPag($pag);

$criterio = new Criterio(PdeFacturaTipoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaTipoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_tipo_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaTipoConcepto::getSesPagCantidad(), PdeFacturaTipoConcepto::getSesPag());
$pde_factura_tipo_conceptos = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptosDesdeBackend($paginador, $criterio);

include 'pde_factura_tipo_concepto_datos.php';
?>

