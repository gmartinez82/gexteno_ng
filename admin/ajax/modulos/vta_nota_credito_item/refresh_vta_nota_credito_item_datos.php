<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoItem::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoItem::getSesPagCantidad(), VtaNotaCreditoItem::getSesPag());
$vta_nota_credito_items = VtaNotaCreditoItem::getVtaNotaCreditoItemsDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_item_datos.php';
?>

