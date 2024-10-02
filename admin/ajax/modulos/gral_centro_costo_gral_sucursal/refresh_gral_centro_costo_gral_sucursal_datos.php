<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCentroCostoGralSucursal::setSesPag($pag);

$criterio = new Criterio(GralCentroCostoGralSucursal::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCostoGralSucursal::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_centro_costo_gral_sucursal');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCentroCostoGralSucursal::getSesPagCantidad(), GralCentroCostoGralSucursal::getSesPag());
$gral_centro_costo_gral_sucursals = GralCentroCostoGralSucursal::getGralCentroCostoGralSucursalsDesdeBackend($paginador, $criterio);

include 'gral_centro_costo_gral_sucursal_datos.php';
?>

