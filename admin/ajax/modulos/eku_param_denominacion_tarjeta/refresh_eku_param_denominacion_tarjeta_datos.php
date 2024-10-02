<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamDenominacionTarjeta::setSesPag($pag);

$criterio = new Criterio(EkuParamDenominacionTarjeta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamDenominacionTarjeta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_denominacion_tarjeta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamDenominacionTarjeta::getSesPagCantidad(), EkuParamDenominacionTarjeta::getSesPag());
$eku_param_denominacion_tarjetas = EkuParamDenominacionTarjeta::getEkuParamDenominacionTarjetasDesdeBackend($paginador, $criterio);

include 'eku_param_denominacion_tarjeta_datos.php';
?>

