<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PanPanol::setSesPag($pag);

$criterio = new Criterio(PanPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pan_panol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PanPanol::getSesPagCantidad(), PanPanol::getSesPag());
$pan_panols = PanPanol::getPanPanolsDesdeBackend($paginador, $criterio);

include 'pan_panol_datos.php';
?>

