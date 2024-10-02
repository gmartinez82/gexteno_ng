<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamCondicionCredito::setSesPag($pag);

$criterio = new Criterio(EkuParamCondicionCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCondicionCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_condicion_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamCondicionCredito::getSesPagCantidad(), EkuParamCondicionCredito::getSesPag());
$eku_param_condicion_creditos = EkuParamCondicionCredito::getEkuParamCondicionCreditosDesdeBackend($paginador, $criterio);

include 'eku_param_condicion_credito_datos.php';
?>

