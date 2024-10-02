<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboItem::setSesPag($pag);

$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboItem::getSesPagCantidad(), VtaReciboItem::getSesPag());
$vta_recibo_items = VtaReciboItem::getVtaReciboItemsDesdeBackend($paginador, $criterio);

include 'vta_recibo_item_datos.php';
?>

