<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPoliticaDescuentoInsCategoria::setSesPag($pag);

$criterio = new Criterio(VtaPoliticaDescuentoInsCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoInsCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_politica_descuento_ins_categoria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPoliticaDescuentoInsCategoria::getSesPagCantidad(), VtaPoliticaDescuentoInsCategoria::getSesPag());
$vta_politica_descuento_ins_categorias = VtaPoliticaDescuentoInsCategoria::getVtaPoliticaDescuentoInsCategoriasDesdeBackend($paginador, $criterio);

include 'vta_politica_descuento_ins_categoria_datos.php';
?>

