<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoNotaDebito::setSesPag($pag);

$criterio = new Criterio(VtaTipoNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoNotaDebito::getSesPagCantidad(), VtaTipoNotaDebito::getSesPag());
$vta_tipo_nota_debitos = VtaTipoNotaDebito::getVtaTipoNotaDebitosDesdeBackend($paginador, $criterio);

include 'vta_tipo_nota_debito_datos.php';
?>

