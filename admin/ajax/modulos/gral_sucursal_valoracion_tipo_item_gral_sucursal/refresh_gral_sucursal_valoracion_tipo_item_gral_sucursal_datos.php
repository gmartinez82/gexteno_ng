<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalValoracionTipoItemGralSucursal::setSesPag($pag);

$criterio = new Criterio(GralSucursalValoracionTipoItemGralSucursal::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalValoracionTipoItemGralSucursal::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_valoracion_tipo_item_gral_sucursal');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalValoracionTipoItemGralSucursal::getSesPagCantidad(), GralSucursalValoracionTipoItemGralSucursal::getSesPag());
$gral_sucursal_valoracion_tipo_item_gral_sucursals = GralSucursalValoracionTipoItemGralSucursal::getGralSucursalValoracionTipoItemGralSucursalsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_valoracion_tipo_item_gral_sucursal_datos.php';
?>

