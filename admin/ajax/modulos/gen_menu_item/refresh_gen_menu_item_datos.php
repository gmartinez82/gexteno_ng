<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenMenuItem::setSesPag($pag);

$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenMenuItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_menu_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenMenuItem::getSesPagCantidad(), GenMenuItem::getSesPag());
$gen_menu_items = GenMenuItem::getGenMenuItemsDesdeBackend($paginador, $criterio);

include 'gen_menu_item_datos.php';
?>

