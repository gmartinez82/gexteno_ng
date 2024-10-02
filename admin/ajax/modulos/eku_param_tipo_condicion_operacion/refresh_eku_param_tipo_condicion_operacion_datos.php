<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoCondicionOperacion::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoCondicionOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoCondicionOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_condicion_operacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoCondicionOperacion::getSesPagCantidad(), EkuParamTipoCondicionOperacion::getSesPag());
$eku_param_tipo_condicion_operacions = EkuParamTipoCondicionOperacion::getEkuParamTipoCondicionOperacionsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_condicion_operacion_datos.php';
?>

