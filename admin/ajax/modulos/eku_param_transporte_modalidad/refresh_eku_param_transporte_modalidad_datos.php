<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTransporteModalidad::setSesPag($pag);

$criterio = new Criterio(EkuParamTransporteModalidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTransporteModalidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_transporte_modalidad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTransporteModalidad::getSesPagCantidad(), EkuParamTransporteModalidad::getSesPag());
$eku_param_transporte_modalidads = EkuParamTransporteModalidad::getEkuParamTransporteModalidadsDesdeBackend($paginador, $criterio);

include 'eku_param_transporte_modalidad_datos.php';
?>

