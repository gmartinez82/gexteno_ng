<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaDebitoItem::setSesPag($pag);

$criterio = new Criterio(PdeNotaDebitoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaDebitoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_debito_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaDebitoItem::getSesPagCantidad(), PdeNotaDebitoItem::getSesPag());
$pde_nota_debito_items = PdeNotaDebitoItem::getPdeNotaDebitoItemsDesdeBackend($paginador, $criterio);

include 'pde_nota_debito_item_datos.php';
?>

