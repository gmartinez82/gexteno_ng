<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboItemConciliado::setSesPag($pag);

$criterio = new Criterio(VtaReciboItemConciliado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboItemConciliado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_item_conciliado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboItemConciliado::getSesPagCantidad(), VtaReciboItemConciliado::getSesPag());
$vta_recibo_item_conciliados = VtaReciboItemConciliado::getVtaReciboItemConciliadosDesdeBackend($paginador, $criterio);

include 'vta_recibo_item_conciliado_datos.php';
?>

