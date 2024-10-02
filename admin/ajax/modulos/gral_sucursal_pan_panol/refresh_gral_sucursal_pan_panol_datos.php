<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalPanPanol::setSesPag($pag);

$criterio = new Criterio(GralSucursalPanPanol::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalPanPanol::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_pan_panol');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalPanPanol::getSesPagCantidad(), GralSucursalPanPanol::getSesPag());
$gral_sucursal_pan_panols = GralSucursalPanPanol::getGralSucursalPanPanolsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_pan_panol_datos.php';
?>

