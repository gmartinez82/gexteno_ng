<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTransporteCondicionNegociacion::setSesPag($pag);

$criterio = new Criterio(EkuParamTransporteCondicionNegociacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTransporteCondicionNegociacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_transporte_condicion_negociacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTransporteCondicionNegociacion::getSesPagCantidad(), EkuParamTransporteCondicionNegociacion::getSesPag());
$eku_param_transporte_condicion_negociacions = EkuParamTransporteCondicionNegociacion::getEkuParamTransporteCondicionNegociacionsDesdeBackend($paginador, $criterio);

include 'eku_param_transporte_condicion_negociacion_datos.php';
?>

