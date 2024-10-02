<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoPanPanol::setSesPag($pag);

$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoPanPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_pan_panol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoPanPanol::getSesPagCantidad(), InsInsumoPanPanol::getSesPag());
$ins_insumo_pan_panols = InsInsumoPanPanol::getInsInsumoPanPanolsDesdeBackend($paginador, $criterio);

include 'ins_insumo_pan_panol_datos.php';
?>

