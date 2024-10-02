<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoVtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoVtaNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoVtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoVtaNotaCredito::getSesPagCantidad(), VtaNotaDebitoVtaNotaCredito::getSesPag());
$vta_nota_debito_vta_nota_creditos = VtaNotaDebitoVtaNotaCredito::getVtaNotaDebitoVtaNotaCreditosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_vta_nota_credito_datos.php';
?>

