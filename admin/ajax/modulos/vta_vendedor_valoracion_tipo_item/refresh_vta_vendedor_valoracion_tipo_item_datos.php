<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorValoracionTipoItem::setSesPag($pag);

$criterio = new Criterio(VtaVendedorValoracionTipoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorValoracionTipoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_valoracion_tipo_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorValoracionTipoItem::getSesPagCantidad(), VtaVendedorValoracionTipoItem::getSesPag());
$vta_vendedor_valoracion_tipo_items = VtaVendedorValoracionTipoItem::getVtaVendedorValoracionTipoItemsDesdeBackend($paginador, $criterio);

include 'vta_vendedor_valoracion_tipo_item_datos.php';
?>

