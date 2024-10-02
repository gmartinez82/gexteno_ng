<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalValoracionTipoItem::setSesPag($pag);

$criterio = new Criterio(GralSucursalValoracionTipoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalValoracionTipoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_valoracion_tipo_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalValoracionTipoItem::getSesPagCantidad(), GralSucursalValoracionTipoItem::getSesPag());
$gral_sucursal_valoracion_tipo_items = GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItemsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_valoracion_tipo_item_datos.php';
?>

