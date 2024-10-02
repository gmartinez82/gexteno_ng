<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboItem::setSesPag($pag);

$criterio = new Criterio(PdeReciboItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboItem::getSesPagCantidad(), PdeReciboItem::getSesPag());
$pde_recibo_items = PdeReciboItem::getPdeReciboItemsDesdeBackend($paginador, $criterio);

include 'pde_recibo_item_datos.php';
?>

