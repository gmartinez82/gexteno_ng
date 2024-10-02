<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamCondicionTipoCambio::setSesPag($pag);

$criterio = new Criterio(EkuParamCondicionTipoCambio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCondicionTipoCambio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_condicion_tipo_cambio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamCondicionTipoCambio::getSesPagCantidad(), EkuParamCondicionTipoCambio::getSesPag());
$eku_param_condicion_tipo_cambios = EkuParamCondicionTipoCambio::getEkuParamCondicionTipoCambiosDesdeBackend($paginador, $criterio);

include 'eku_param_condicion_tipo_cambio_datos.php';
?>

