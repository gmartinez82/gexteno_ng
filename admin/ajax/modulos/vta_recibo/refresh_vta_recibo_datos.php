<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaRecibo::setSesPag($pag);

$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRecibo::getSesPagCantidad(), VtaRecibo::getSesPag());
$vta_recibos = VtaRecibo::getVtaRecibosDesdeBackend($paginador, $criterio);

include 'vta_recibo_datos.php';
?>

