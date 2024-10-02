<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaItem::setSesPag($pag);

$criterio = new Criterio(VtaFacturaItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaItem::getSesPagCantidad(), VtaFacturaItem::getSesPag());
$vta_factura_items = VtaFacturaItem::getVtaFacturaItemsDesdeBackend($paginador, $criterio);

include 'vta_factura_item_datos.php';
?>

