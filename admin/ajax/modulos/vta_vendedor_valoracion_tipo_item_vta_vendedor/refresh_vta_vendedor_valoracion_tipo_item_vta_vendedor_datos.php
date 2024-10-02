<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorValoracionTipoItemVtaVendedor::setSesPag($pag);

$criterio = new Criterio(VtaVendedorValoracionTipoItemVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorValoracionTipoItemVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_valoracion_tipo_item_vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorValoracionTipoItemVtaVendedor::getSesPagCantidad(), VtaVendedorValoracionTipoItemVtaVendedor::getSesPag());
$vta_vendedor_valoracion_tipo_item_vta_vendedors = VtaVendedorValoracionTipoItemVtaVendedor::getVtaVendedorValoracionTipoItemVtaVendedorsDesdeBackend($paginador, $criterio);

include 'vta_vendedor_valoracion_tipo_item_vta_vendedor_datos.php';
?>

