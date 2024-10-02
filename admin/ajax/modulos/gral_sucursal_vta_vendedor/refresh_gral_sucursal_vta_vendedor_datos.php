<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalVtaVendedor::setSesPag($pag);

$criterio = new Criterio(GralSucursalVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalVtaVendedor::getSesPagCantidad(), GralSucursalVtaVendedor::getSesPag());
$gral_sucursal_vta_vendedors = GralSucursalVtaVendedor::getGralSucursalVtaVendedorsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_vta_vendedor_datos.php';
?>

