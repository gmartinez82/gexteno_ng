<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoOrigenNotaDebito::setSesPag($pag);

$criterio = new Criterio(VtaTipoOrigenNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoOrigenNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_origen_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoOrigenNotaDebito::getSesPagCantidad(), VtaTipoOrigenNotaDebito::getSesPag());
$vta_tipo_origen_nota_debitos = VtaTipoOrigenNotaDebito::getVtaTipoOrigenNotaDebitosDesdeBackend($paginador, $criterio);

include 'vta_tipo_origen_nota_debito_datos.php';
?>

