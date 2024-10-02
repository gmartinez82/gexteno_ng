<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCentroCostoVtaVendedor::setSesPag($pag);

$criterio = new Criterio(GralCentroCostoVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCostoVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_centro_costo_vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCentroCostoVtaVendedor::getSesPagCantidad(), GralCentroCostoVtaVendedor::getSesPag());
$gral_centro_costo_vta_vendedors = GralCentroCostoVtaVendedor::getGralCentroCostoVtaVendedorsDesdeBackend($paginador, $criterio);

include 'gral_centro_costo_vta_vendedor_datos.php';
?>

