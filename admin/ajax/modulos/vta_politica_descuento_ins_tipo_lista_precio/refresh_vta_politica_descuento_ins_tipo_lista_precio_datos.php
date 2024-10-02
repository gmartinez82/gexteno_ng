<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPoliticaDescuentoInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(VtaPoliticaDescuentoInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_politica_descuento_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPoliticaDescuentoInsTipoListaPrecio::getSesPagCantidad(), VtaPoliticaDescuentoInsTipoListaPrecio::getSesPag());
$vta_politica_descuento_ins_tipo_lista_precios = VtaPoliticaDescuentoInsTipoListaPrecio::getVtaPoliticaDescuentoInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'vta_politica_descuento_ins_tipo_lista_precio_datos.php';
?>

