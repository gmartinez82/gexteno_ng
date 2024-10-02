<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoOrigenRecibo::setSesPag($pag);

$criterio = new Criterio(VtaTipoOrigenRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoOrigenRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_origen_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoOrigenRecibo::getSesPagCantidad(), VtaTipoOrigenRecibo::getSesPag());
$vta_tipo_origen_recibos = VtaTipoOrigenRecibo::getVtaTipoOrigenRecibosDesdeBackend($paginador, $criterio);

include 'vta_tipo_origen_recibo_datos.php';
?>

