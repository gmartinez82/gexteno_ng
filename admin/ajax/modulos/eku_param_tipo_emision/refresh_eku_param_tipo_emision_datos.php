<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoEmision::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoEmision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoEmision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_emision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoEmision::getSesPagCantidad(), EkuParamTipoEmision::getSesPag());
$eku_param_tipo_emisions = EkuParamTipoEmision::getEkuParamTipoEmisionsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_emision_datos.php';
?>

