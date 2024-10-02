<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoTransaccion::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoTransaccion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoTransaccion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_transaccion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoTransaccion::getSesPagCantidad(), EkuParamTipoTransaccion::getSesPag());
$eku_param_tipo_transaccions = EkuParamTipoTransaccion::getEkuParamTipoTransaccionsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_transaccion_datos.php';
?>

