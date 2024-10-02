<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacionItem::setSesPag($pag);

$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_agrupacion_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacionItem::getSesPagCantidad(), PdeOcAgrupacionItem::getSesPag());
$pde_oc_agrupacion_items = PdeOcAgrupacionItem::getPdeOcAgrupacionItemsDesdeBackend($paginador, $criterio);

include 'pde_oc_agrupacion_item_datos.php';
?>

