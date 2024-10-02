<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebitoItem::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebitoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaDebitoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_debito_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebitoItem::getSesPagCantidad(), VtaNotaDebitoItem::getSesPag());
$vta_nota_debito_items = VtaNotaDebitoItem::getVtaNotaDebitoItemsDesdeBackend($paginador, $criterio);

include 'vta_nota_debito_item_datos.php';
?>

