<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(VtaVendedorInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorInsTipoListaPrecio::getSesPagCantidad(), VtaVendedorInsTipoListaPrecio::getSesPag());
$vta_vendedor_ins_tipo_lista_precios = VtaVendedorInsTipoListaPrecio::getVtaVendedorInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'vta_vendedor_ins_tipo_lista_precio_datos.php';
?>

