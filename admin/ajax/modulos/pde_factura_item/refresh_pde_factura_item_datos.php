<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaItem::setSesPag($pag);

$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaItem::getSesPagCantidad(), PdeFacturaItem::getSesPag());
$pde_factura_items = PdeFacturaItem::getPdeFacturaItemsDesdeBackend($paginador, $criterio);

include 'pde_factura_item_datos.php';
?>

