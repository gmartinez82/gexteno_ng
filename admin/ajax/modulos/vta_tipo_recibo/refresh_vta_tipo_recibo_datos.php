<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoRecibo::setSesPag($pag);

$criterio = new Criterio(VtaTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoRecibo::getSesPagCantidad(), VtaTipoRecibo::getSesPag());
$vta_tipo_recibos = VtaTipoRecibo::getVtaTipoRecibosDesdeBackend($paginador, $criterio);

include 'vta_tipo_recibo_datos.php';
?>

