<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoOrigenNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaTipoOrigenNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoOrigenNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_origen_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoOrigenNotaCredito::getSesPagCantidad(), VtaTipoOrigenNotaCredito::getSesPag());
$vta_tipo_origen_nota_creditos = VtaTipoOrigenNotaCredito::getVtaTipoOrigenNotaCreditosDesdeBackend($paginador, $criterio);

include 'vta_tipo_origen_nota_credito_datos.php';
?>

