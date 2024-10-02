<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoItem::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoItem::getSesPagCantidad(), PdeNotaCreditoItem::getSesPag());
$pde_nota_credito_items = PdeNotaCreditoItem::getPdeNotaCreditoItemsDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_item_datos.php';
?>

