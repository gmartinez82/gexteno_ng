<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoVendedor::setSesPag($pag);

$criterio = new Criterio(VtaTipoVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoVendedor::getSesPagCantidad(), VtaTipoVendedor::getSesPag());
$vta_tipo_vendedors = VtaTipoVendedor::getVtaTipoVendedorsDesdeBackend($paginador, $criterio);

include 'vta_tipo_vendedor_datos.php';
?>

