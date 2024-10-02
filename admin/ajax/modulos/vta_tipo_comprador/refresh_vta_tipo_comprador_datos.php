<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoComprador::setSesPag($pag);

$criterio = new Criterio(VtaTipoComprador::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoComprador::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_comprador');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoComprador::getSesPagCantidad(), VtaTipoComprador::getSesPag());
$vta_tipo_compradors = VtaTipoComprador::getVtaTipoCompradorsDesdeBackend($paginador, $criterio);

include 'vta_tipo_comprador_datos.php';
?>

