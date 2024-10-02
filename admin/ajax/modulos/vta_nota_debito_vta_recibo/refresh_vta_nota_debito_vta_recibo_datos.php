<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoVtaRecibo::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoVtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoVtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoVtaRecibo::getSesPagCantidad(), VtaNotaDebitoVtaRecibo::getSesPag());
$vta_nota_debito_vta_recibos = VtaNotaDebitoVtaRecibo::getVtaNotaDebitoVtaRecibosDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_vta_recibo_datos.php';
?>

