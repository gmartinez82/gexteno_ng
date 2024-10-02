<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCentroCostoPrvProveedor::setSesPag($pag);

$criterio = new Criterio(GralCentroCostoPrvProveedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCostoPrvProveedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_centro_costo_prv_proveedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCentroCostoPrvProveedor::getSesPagCantidad(), GralCentroCostoPrvProveedor::getSesPag());
$gral_centro_costo_prv_proveedors = GralCentroCostoPrvProveedor::getGralCentroCostoPrvProveedorsDesdeBackend($paginador, $criterio);

include 'gral_centro_costo_prv_proveedor_datos.php';
?>

